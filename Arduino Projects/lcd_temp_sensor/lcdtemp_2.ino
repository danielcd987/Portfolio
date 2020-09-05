/*Description: This project measures the humidity, and temperature in celcius and fahrenheit, also displays the bits of the measurement
 *Purpose: The purpose is to display the readings on a temperature sensor on an LCD board.
 *Function: This code uses the DHT example and the Hello world library and example.
 *Also wanted to thank Professor Sabal for helping me on this project with out him i wouldnt know what to do.
 */

#include "SimpleDHT.h"
#include "DHT.h"
#include "DHT_U.h"


/*LiquidCrystal Library - Hello World

 Demonstrates the use a 16x2 LCD display.  The LiquidCrystal
 library works with all LCD displays that are compatible with the
 Hitachi HD44780 driver. There are many of them out there, and you
 can usually tell them by the 16-pin interface.

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

 This example code is in the public domain.

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
  
  // set up the LCD's number of columns and rows:
  lcd.begin(16, 2);
  // Print a message to the LCD.
  lcd.print("");
  dht.begin(); //this makes sure the senor begins the measurments
}

void loop() {
  
  // set the cursor to column 0, line 1
  // (note: line 1 is the second row, since counting begins with 0):
   float h = dht.readHumidity();  //this displays the humidity on LCD towards middle
  // Read temperature as Celsius (the default)
  lcd.setCursor (9,0), 
  lcd.print(h);
  lcd.setCursor (15,0),
  lcd.print("H");
  lcd.setCursor(9,0 ); //(column then number)
  
  float t = dht.readTemperature(); // this displays the temperature in celcius
  lcd.setCursor (0,0),
  lcd.print(t);
  lcd.setCursor (6,0),
  lcd.print("C");
  lcd.setCursor(0, 1);
  
  float f = dht.readTemperature(true); //this displays the temperature in fahrenheit
  lcd.setCursor (9,1),
  lcd.print(f);
  lcd.setCursor (15,1),
  lcd.print("F");
  lcd.setCursor(0, 1);

//displays TEMPDIS
 lcd.setCursor(0,1),
 lcd.print("5469 B"); //this shows the amount of Bytes the program takes up
 
 

/* 
//DISPLAY BITES
lcd.setcursor(0,1),
lcd.print("bites");
 */
}
