//buzzer
const int PWM = 3 ;

//water sensor
int water_level /*adc_id*/ = 0; //the level first starts at 0 water sensor goes to analog pin 0
int HistoryValue = 0;
char printBuffer[128];

//temperature sensor libraries
#include "SimpleDHT.h"
#include "DHT.h"
#include "DHT_U.h"

//remote from the examples on the arduino cd
//#include <IRremote.h>


//www.elegoo.com
//2016.12.9

//#include "IRremote.h"

//int receiver = 51; // Signal Pin of IR receiver to Arduino Digital Pin 4

/*-----( Declare objects )-----*/

//IRrecv irrecv(receiver);     // create instance of 'irrecv'
//decode_results results;      // create instance of 'decode_results'

/*-----( Function )-----*/

//void translateIR() // takes action based on IR code received

// describing Remote IR codes 
/*
{

  switch(results.value)

  {
  case 0xFFA25D: Serial.println("POWER"); break;
  case 0xFFE21D: Serial.println("FUNC/STOP"); break;
  case 0xFF629D: Serial.println("VOL+"); break;
  case 0xFF22DD: Serial.println("FAST BACK");    break;
  case 0xFF02FD: Serial.println("PAUSE");    break;
  case 0xFFC23D: Serial.println("FAST FORWARD");   break;
  case 0xFFE01F: Serial.println("DOWN");    break;
  case 0xFFA857: Serial.println("VOL-");    break;
  case 0xFF906F: Serial.println("UP");    break;
  case 0xFF9867: Serial.println("EQ");    break;
  case 0xFFB04F: Serial.println("ST/REPT");    break;
  case 0xFF6897: Serial.println("0");    break;
  case 0xFF30CF: Serial.println("1");    break;
  case 0xFF18E7: Serial.println("2");    break;
  case 0xFF7A85: Serial.println("3");    break;
  case 0xFF10EF: Serial.println("4");    break;
  case 0xFF38C7: Serial.println("5");    break;
  case 0xFF5AA5: Serial.println("6");    break;
  case 0xFF42BD: Serial.println("7");    break;
  case 0xFF4AB5: Serial.println("8");    break;
  case 0xFF52AD: Serial.println("9");    break;
  case 0xFFFFFFFF: Serial.println(" REPEAT");break;  

  default: 
    Serial.println(" other button");

  }// End Case

  delay(500); // Do not get immediate repeat


} //END translateIR

/*
  The circuit:
 * LCD RS pin to digital pin 7
 * LCD Enable pin to digital pin 8
 * LCD D4 pin to digital pin 9
 * LCD D5 pin to digital pin 10
 * LCD D6 pin to digital pin 11
 * LCD D7 pin to digital pin 12
 * LCD R/W pin to ground
 * LCD VSS pin to ground
 * LCD VCC pin to 5V
 * 10K resistor:
 * ends to +5V and ground

 Library originally added 18 Apr 2008
 by David A. Mellis
 library modified 5 Jul 2009
 by Limor Fried (http://www.ladyada.net)
 example added 9 Jul 2009
 by Tom Igoe
 modified 22 Nov 2010
 by Tom Igoe
 modified 7 Nov 2016
 by Arturo Guadalupi
 http://www.arduino.cc/en/Tutorial/LiquidCrystalHelloWorld

*/

// include the library code:
#include <LiquidCrystal.h>

// initialize the library by associating any needed LCD interface pin
// with the arduino pin number it is connected to
const int rs = 7, en = 8, d4 = 9, d5 = 10, d6 = 11, d7 = 12;
LiquidCrystal lcd(rs, en, d4, d5, d6, d7);
#define DHTTYPE DHT11   // DHT 11
DHT dht(2, DHTTYPE); //put the pin number that senssor is connected to

//make sure RW is connected to ground
void setup() {
 Serial.begin(9600); //for water sensor
 
//Green LED
 pinMode(31, OUTPUT);
//red LED
 pinMode(29, OUTPUT);
 
  // set up the LCD's number of columns and rows:
  lcd.begin(16, 2);
  // Print a message to the LCD.
  lcd.print("");
  dht.begin(); //this makes sure the senor begins the measurments
 
 //remote
  //Serial.begin(9600);
  //Serial.println("IR Receiver Button Decode"); 
//  irrecv.enableIRIn(); // Start the receiver 
}

void loop() {
  lcd.clear();
  // set the cursor to column 0, line 1
  // (note: line 1 is the second row, since counting begins with 0):
   float h = dht.readHumidity();  //this displays the humidity on LCD towards middle
  
  // Read temperature as Celsius (the default)
  lcd.setCursor (9,0),
  lcd.print(h);
  lcd.setCursor (15,0),
  lcd.print("H");
  lcd.setCursor(9,0 ); //(column then number)
  //Serial.print(h); //prints humidity in serial monitor
  float t = dht.readTemperature(); // this displays the temperature in celcius
  lcd.setCursor (0,0),
  lcd.print(t);
  lcd.setCursor (6,0),
  lcd.print("C");
  lcd.setCursor(0, 1);
  //Serial.print(t); //prints celcius in serial monitor
  float f = dht.readTemperature(true); //this displays the temperature in fahrenheit
  lcd.setCursor (9,1),
  lcd.print(f);
  lcd.setCursor (15,1),
  lcd.print("F");
  lcd.setCursor(0, 1);
  //Serial.print(f); //prints fahrenheit in serial monitor

//displays TEMPDIS
 lcd.setCursor(0,1),
 lcd.print(printBuffer); //this shows the amount of Bytes the program takes up
 
//water sensor
int value = analogRead(water_level); // get water_level value

    if(((HistoryValue>=value) && ((HistoryValue - value) > 10)) || ((HistoryValue<value) && ((value - HistoryValue) > 10)))
    {
      sprintf(printBuffer,"WL%d %d",water_level, value); //prints the value of the water level. /n creates the new line(for serial monitor)
      Serial.print(printBuffer); //prints the message above
      HistoryValue = value;
    }
 
  delay(100); // Check for new value every 1 sec
  //green LED
  if(value >= 230){
    digitalWrite(31, HIGH); //digital port 31 Green
    digitalWrite(29, LOW); //digital port 31
}

//buzzer goes off if system is stable or not also the lcd prints to add water.
  if(value < 215){
      lcd.clear(); 
      lcd.print("Add Water");
      //lcd.clear();
      delay(500);
      tone (PWM,440,500);
      delay(500);
      digitalWrite(29, HIGH); //digital port 29 turns on red for unstable
      digitalWrite(31, LOW); //digital port 31 shuts off green
      lcd.clear();
}//buzz

//remote
/*
if (irrecv.decode(&results)) // have we received an IR signal?

  {
    translateIR(); 
    irrecv.resume(); // receive the next value
  } */
/*
//Green LED
digitalWrite(31, HIGH); //digital port 31
//red LED
digitalWrite(29, HIGH); //digital port 29
*/
}
