/*morse code generator 
Based on Blink example from Arduino IDE
Also a big thankyou to Professor Sabal who helped me on this project.
This project uses the International version of Morse code.
 */

/*USE ALL CAPS FOR LETTER INPUT*/


int outPin = 13;
int dotspeed = 300;
String input;
char letters[60] = {'A', 'B', 'C', 'D','E','F','G','H','I','J','K','L','M',
                   'N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','.',',',':',';','?','&'};
                   
String morse[60] = {".-"/*A*/,"-..."/*B*/,"-.-."/*C*/,"-.."/*D*/,"."/*E*/,"..-."/*F*/,"--."/*G*/,"...."/*H*/,".."/*I*/,
                    ".---"/*J*/, "-.-"/*K*/,".-.."/*L*/,"--"/*M*/, "-."/*N*/, "---"/*O*/, ".--."/*P*/,"--.-"/*Q*/,".-."/*R*/,
                    "..."/*S*/,"-"/*T*/, "..-"/*U*/, "...-"/*V*/, ".--"/*W*/, "-..-"/*X*/, "-.--"/*Y*/, "--.."/*Z*/,".----"/*1*/,"..---"/*2*/,"...--"/*3*/,
                    "....-"/*4*/,"....."/*5*/,"-...."/*6*/,"--..."/*7*/,"---.."/*8*/,"----."/*9*/,"-----"/*0*/,".-.-.-"/*.*/,"--..--"/*,*/,"---..."/*:*/
                    ,"-.-.-."/*;*/,"..--.."/*?*/,".-..."/*&*/
                    };

/*Morse code alpahbet is found from https://en.wikipedia.org/wiki/Morse_code
and https://ece.uwaterloo.ca/~dwharder/Morse_code/ */

//String trans[60][2];
// the setup function runs once when you press reset or power the board
void setup(){
  // initialize digital pin LED_BUILTIN as an output.
  
  outPin = LED_BUILTIN ;
  dotspeed = 300; 
  input = ""; 

  //Use morse code letters. 
  pinMode(outPin, OUTPUT);
  Serial .begin (9600);
} //setup()
//Reads each character in 'in' and output the equivalent morse code.

String convert (String in){
  
 int len = in.length();
 String out = "";
for (int ctr = 0; ctr < len; ctr++){
 char thisChar = in.charAt (ctr); 

 for (int lctr = 0; lctr < 60; lctr++) {
 //Serial.print(letters[lctr]);       //THIS IS DEBUGGING CODE
 if ((char)letters[lctr]==thisChar) {
      out += morse[lctr]+"/";
      exit;
    }
  }
} 
  return out;

}   //convert()
void flashTheLed (String in){

//Each dot and dash get their own section of loop functions. 

int len = in.length();
 String out = "";
for (int ctr = 0; ctr < len; ctr++){
 char thisChar = in.charAt (ctr); 
 if(thisChar == '.') {
digitalWrite(outPin, HIGH);   // turn the LED on (HIGH is the voltage level) //This function shows the display on LED light and controls hohw long it goes on for.
  delay(dotspeed);                       
  digitalWrite(outPin, LOW);    // turn the LED off by making the voltage LOW //The delay speed is called dotspeed b/c you declared it as 500 in begining.
  delay(dotspeed);  }
  
  if(thisChar == '-') {
digitalWrite(outPin, HIGH);   // turn the LED on (HIGH is the voltage level)
  delay(3*dotspeed);                       
  digitalWrite(outPin, LOW);    // turn the LED off by making the voltage LOW
  delay(dotspeed);  }
  
  if(thisChar == '/') {
digitalWrite(outPin, LOW);   // turn the LED on (HIGH is the voltage level)
  delay(dotspeed);                       
  digitalWrite(outPin, LOW);    // turn the LED off by making the voltage LOW
  delay(dotspeed);  }
}
}
// the loop function runs over and over again forever
void loop() {
input = "";
 
  //Read data from serial line
while (Serial.available()){
  input  += (char)Serial.read() ; //This forces the conversion of byte to character 
  delay(2);
}
Serial.print(input);
 String dotsdashes = convert(input); 
  /*Serial.print(input); debugging code */
  //String dotsdashes = convert(""); //THIS CONVERTS THE INPUT AND MAKES IT INTO DOTS AND DASHES.
  Serial.print(dotsdashes);
  flashTheLed(dotsdashes);
  //Finished with the output; reset variables for next input.
 input = "";

/*If there is an error "ERROR COMPILING FOR BOARD ARDUINO/GENUINO MEGA OR MEGA 2560" 
reset the board by pressing the red rest button or verify the code then upload.*/


} //Arduino Loop {}
