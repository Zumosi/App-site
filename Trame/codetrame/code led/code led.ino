#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include <math.h>

//capteurs

#define lum 0
#define infra 1
#define son 2

// a determiner
//pin

#define Plum 25
#define Pinfral 26
#define Pinfra2 27
#define Pson 28

void setup()
{
  pinMode(Plum,INPUT);
pinMode(RED_LED,OUTPUT);
pinMode(BLUE_LED,OUTPUT);
pinMode(GREEN_LED,OUTPUT);
Serial1.begin(9600);
  // put your setup code here, to run once:
}

void loop()
{
	digitalWrite(RED_LED, HIGH);
	digitalWrite(GREEN_LED, LOW);
  delay(500);
  digitalWrite(BLUE_LED, HIGH);
  digitalWrite(RED_LED, LOW);
  delay(500);
  digitalWrite(GREEN_LED, HIGH);
  digitalWrite(BLUE_LED, LOW);
  delay(500);
  // put your main code here, to run repeatedly:
  int sent=0;
 
}

void setColor(int red, int green, int blue)
{
  
}

