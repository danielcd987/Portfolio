/*Purpose: the purpose of this project is to show my understanding of wiring and how to implement code to produce a musical instrument.
 * Description: This musical instrument is composed of a keypad, a buzzer, and a LED matrix display. When you press a button on the keypad a certain note appears.
When that button is pressed a letter will appear. the letter represents what note is being played.
 */
/* to get a specific button to play a specific note i needed the command if(customkey == '') and to find that command iused http://www.electricalelibrary.com/en/2018/08/26/arduino-tutorial-part-9-music-and-keypad/ as my 
 source
 To get theletters for the matrix to appear i used https://gist.github.com/bramus/e33ad8b8e4c51eedf330 by bramus on github.com
 */

//From the arduino cd example for keypad
/* @file CustomKeypad.pde
|| @version 1.0
|| @author Alexander Brevig
|| @contact alexanderbrevig@gmail.com
||
|| @description
|| | Demonstrates changing the keypad size and key values.
|| #
*/
const int PWM = 11;// this is from buzzerpassivetest example and the port to plug it in
#include <Keypad.h> //library for keypad
#include "LedControl.h" //library for LED matrix

LedControl lc=LedControl(23,25,27); //these are the pins used for LED matrix

/* we always wait a bit between updates of the display so there will be a delay between the displays */
unsigned long delaytime1=500;
unsigned long delaytime2=50;


const byte ROWS = 4; //four rows
const byte COLS = 4; //four columns
//define the cymbols on the buttons of the keypads
char hexaKeys[ROWS][COLS] = {
  {'1','2','3','A'},
  {'4','5','6','B'},
  {'7','8','9','C'},
  {'*','0','#','D'}
};
byte rowPins[ROWS] = {9, 8, 7, 6}; //connect to the row pinouts of the keypad
byte colPins[COLS] = {5, 4, 3, 2}; //connect to the column pinouts of the keypad

//initialize an instance of class NewKeypad
Keypad customKeypad = Keypad( makeKeymap(hexaKeys), rowPins, colPins, ROWS, COLS); 

void setup(){
  Serial.begin(9600);
  
  //for LED matrix
   lc.shutdown(0,false);
  /* Set the brightness to a medium values */
  lc.setIntensity(0,8);
  /* and clear the display */
  lc.clearDisplay(0);
}
//writes the letter on matrix
void writeArduinoOnMatrix() {
  /* here is the data for the characters */
  //displays a
  byte a[5]={B01111110,B10001000,B10001000,B10001000,B01111110};
  lc.setRow(0,0,a[0]);
  lc.setRow(0,1,a[1]);
  lc.setRow(0,2,a[2]);
  lc.setRow(0,3,a[3]);
  lc.setRow(0,4,a[4]);
  delay(delaytime1);
  }
void writeArduinoMatrix2(){
  //displays c
byte c[8]={B00111110,B01000000,B01000000,B01000000,B01000000,B01000000,B01000000,B00111110};
  lc.setRow(0,0,c[0]);
  lc.setRow(0,1,c[1]);
  lc.setRow(0,2,c[2]);
  lc.setRow(0,3,c[3]);
  lc.setRow(0,4,c[4]);
  delay(delaytime1);
  }
void writeArduinoMatrix3(){
  //displays cs for c#
byte c[8]={B00111110,B01000000,B01000000,B01000000,B01000000,B01000000,B01000000,B00111110};
byte s[8]={B00111100,B01000010,B01000000,B00111100,B00000010,B00000010,B01000010,B00111100};
  lc.setRow(0,0,c[0]);
  lc.setRow(0,1,c[1]);
  lc.setRow(0,2,c[2]);
  lc.setRow(0,3,c[3]);
  lc.setRow(0,4,c[4]);
  delay(delaytime1);
  lc.setRow(0,0,s[0]);
  lc.setRow(0,1,s[1]);
  lc.setRow(0,2,s[2]);
  lc.setRow(0,3,s[3]);
  lc.setRow(0,4,s[4]);
  delay(delaytime1);
  }
void writeArduinoMatrix4(){
  //displays d
byte d[8]={B01111100,B01000010,B01000010,B01000010,B01000010,B01000010,B01000010,B01111100};
  lc.setRow(0,0,d[0]);
  lc.setRow(0,1,d[1]);
  lc.setRow(0,2,d[2]);
  lc.setRow(0,3,d[3]);
  lc.setRow(0,4,d[4]);
  delay(delaytime1);
  }
  void writeArduinoMatrix5(){
  //displays e
 byte e[8]={B01111110,B01000000,B01000000,B01111000,B01000000,B01000000,B01000000,B01111110};
  lc.setRow(0,0,e[0]);
  lc.setRow(0,1,e[1]);
  lc.setRow(0,2,e[2]);
  lc.setRow(0,3,e[3]);
  lc.setRow(0,4,e[4]);
  delay(delaytime1);
  }
  void writeArduinoMatrix6(){
  //displays g#
  byte g[8]={B00111100,B01000010,B01000010,B01000000,B01001110,B01000010,B01000010,B00111100};
  byte s[8]={B00111100,B01000010,B01000000,B00111100,B00000010,B00000010,B01000010,B00111100};
  lc.setRow(0,0,g[0]);
  lc.setRow(0,1,g[1]);
  lc.setRow(0,2,g[2]);
  lc.setRow(0,3,g[3]);
  lc.setRow(0,4,g[4]);
  delay(delaytime1);
  lc.setRow(0,0,s[0]);
  lc.setRow(0,1,s[1]);
  lc.setRow(0,2,s[2]);
  lc.setRow(0,3,s[3]);
  lc.setRow(0,4,s[4]);
  delay(delaytime1);
  }
void writeArduinoMatrix7(){
  //displays b
 byte b[8]={B01111100,B01000010,B01000010,B01111100,B01000010,B01000010,B01000010,B01111100};
  lc.setRow(0,0,b[0]);
  lc.setRow(0,1,b[1]);
  lc.setRow(0,2,b[2]);
  lc.setRow(0,3,b[3]);
  lc.setRow(0,4,b[4]);
  delay(delaytime1);
  }
  void writeArduinoMatrix8(){
  //displays d#
 byte d[8]={B01111100,B01000010,B01000010,B01000010,B01000010,B01000010,B01000010,B01111100};
  lc.setRow(0,0,d[0]);
  lc.setRow(0,1,d[1]);
  lc.setRow(0,2,d[2]);
  lc.setRow(0,3,d[3]);
  lc.setRow(0,4,d[4]);
  delay(delaytime1);
  }
  void writeArduinoMatrix9(){
  //displays c
 byte c[8]={B00111110,B01000000,B01000000,B01000000,B01000000,B01000000,B01000000,B00111110};
  lc.setRow(0,0,c[0]);
  lc.setRow(0,1,c[1]);
  lc.setRow(0,2,c[2]);
  lc.setRow(0,3,c[3]);
  lc.setRow(0,4,c[4]);
  delay(delaytime1);
  }
  void writeArduinoMatrix0(){
  //displays F
 byte f[8]={B01111110,B01000000,B01000000,B01111000,B01000000,B01000000,B01000000,B01000000};
  lc.setRow(0,0,f[0]);
  lc.setRow(0,1,f[1]);
  lc.setRow(0,2,f[2]);
  lc.setRow(0,3,f[3]);
  lc.setRow(0,4,f[4]);
  delay(delaytime1);
  }
  void writeArduinoMatrixA(){
  //displays g#3
  byte g[8]={B00111100,B01000010,B01000010,B01000000,B01001110,B01000010,B01000010,B00111100};
  byte s[8]={B00111100,B01000010,B01000000,B00111100,B00000010,B00000010,B01000010,B00111100};
  lc.setRow(0,0,g[0]);
  lc.setRow(0,1,g[1]);
  lc.setRow(0,2,g[2]);
  lc.setRow(0,3,g[3]);
  lc.setRow(0,4,g[4]);
  delay(delaytime1);
  lc.setRow(0,0,s[0]);
  lc.setRow(0,1,s[1]);
  lc.setRow(0,2,s[2]);
  lc.setRow(0,3,s[3]);
  lc.setRow(0,4,s[4]);
  delay(delaytime1);
  }
  void writeArduinoMatrixB(){
  //displays A
 byte a[8]={B00111100,B01000010,B01000010,B01111110,B01000010,B01000010,B01000010,B01000010};
  lc.setRow(0,0,a[0]);
  lc.setRow(0,1,a[1]);
  lc.setRow(0,2,a[2]);
  lc.setRow(0,3,a[3]);
  lc.setRow(0,4,a[4]);
  delay(delaytime1);
  }
  void writeArduinoMatrixC(){
  //displays F#
 byte f[8]={B01111110,B01000000,B01000000,B01111000,B01000000,B01000000,B01000000,B01000000};
  lc.setRow(0,0,f[0]);
  lc.setRow(0,1,f[1]);
  lc.setRow(0,2,f[2]);
  lc.setRow(0,3,f[3]);
  lc.setRow(0,4,f[4]);
  delay(delaytime1);
  }
  void writeArduinoMatrixD(){
  //displays E3
 byte e[8]={B01111110,B01000000,B01000000,B01111000,B01000000,B01000000,B01000000,B01111110};
  lc.setRow(0,0,e[0]);
  lc.setRow(0,1,e[1]);
  lc.setRow(0,2,e[2]);
  lc.setRow(0,3,e[3]);
  lc.setRow(0,4,e[4]);
  delay(delaytime1);
  }
void loop(){
  
  //in this program only the numbers play music notes and the symbols * and # play a variety of notes
  char customKey = customKeypad.getKey(); 
  Serial.print(customKey);
    if(customKey == '1'){ //this allows a ceratin note to be played for a specific button...in this case its button 1
      tone (PWM,440,500); // music note A
  delay(100);
  writeArduinoOnMatrix();
  }
      if(customKey == '2'){
      tone (PWM,261.63,500); //music note C3
  delay(100);
  writeArduinoMatrix2();
  }
   if(customKey == '3'){
      tone (PWM,277.18,500); //music note C#3
  delay(100); 
  writeArduinoMatrix3();
   }
   if(customKey == '4'){  //music note D3
      tone (PWM,293.66,500);
  delay(100);
  writeArduinoMatrix4();
   }
   if(customKey == '5'){   //music note E4
      tone (PWM,659.26,500);
  delay(100);
  writeArduinoMatrix5();
   }
   if(customKey == '6'){   //music note G#
      tone (PWM,830.61,500);
  delay(100);
  writeArduinoMatrix6();
   }
   if(customKey == '7'){   //music note B5
      tone (PWM,982.08,500);
  delay(100);
  writeArduinoMatrix7();
   }
   if(customKey == '8'){   //music note D#
      tone (PWM,618.67,500);
  delay(100);
  writeArduinoMatrix8();
   }
   if(customKey == '9'){   //music note C5
      tone (PWM,1046.50,500);
  delay(100);
  writeArduinoMatrix9();
   }
   if(customKey == '0'){   //music note F4
      tone (PWM,698.46,500);
  delay(100);
  writeArduinoMatrix0();
   }
   if(customKey == '*'){  
      tone (PWM,1046.50,500); 
  delay(100);
      tone (PWM,618.67,500); 
  delay(100);
      tone (PWM,982.08,500); 
  delay(100);
   }
   if(customKey == 'A'){   //music note G#3
      tone (PWM,415.30,500);
  delay(100);
  writeArduinoMatrixA();
   }
   if(customKey == 'B'){   //music note A
      tone (PWM,880,500);
  delay(100);
  writeArduinoMatrixB();
   }
   if(customKey == 'C'){   //music note F# 4
      tone (PWM,739.99,500);
  delay(100);
  writeArduinoMatrixC();
   }
   if(customKey == 'D'){   //music note E3      
    tone (PWM,329.63,500);
  delay(100);
  writeArduinoMatrixD();
   }
   if(customKey == '#'){  //this is an unfinished Jesus loves me 
      tone (PWM,392,500); 
  delay(1000);
      tone (PWM,659.26,500); 
  delay(500);
      tone (PWM,659.26,500); 
  delay(1000);
      tone (PWM,587.33,500); //bttn 9
  delay(500);
      tone (PWM,329.63,500); //bttn 8
  delay(1000);
      tone (PWM,659.26,500); //bttn 7
  delay(500);
      tone (PWM,392,500); //bttn 9
  delay(1000);
      tone (PWM,440,500); //bttn 8
  delay(500);
      tone (PWM,440,500); //bttn 7
  delay(1000);
      tone (PWM,523.25,500); //bttn 9
  delay(500);
      tone (PWM,440,500); //bttn 8
  delay(1000);
   }
}
