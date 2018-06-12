#include <stdio.h>

#define BG5 2
#define BG4 34
#define BG3 35
#define BG2 36
#define BG1 37

#define M1 14
#define M2 15

#define microphone 5

#define potentiometre 28

#define ventilateur 26

#define MAXVAL 4095

#define movesensor 26

#define tempbufsize 1000

#define lightsensor 25

int zone = MAXVAL / 5;

unsigned long pval=0;

unsigned long poval=0;

unsigned long printdelay=120;// a rallonger

unsigned long currenttime=0;

unsigned long nextprinttime=600;// a rallonger

unsigned int ventdelay=5000000;

unsigned long nextventtime=0;

unsigned int motdelay=10000;

unsigned long nextmottime=0;


unsigned int tempprobedelay=10000;

unsigned long nexttempprobetime=0;

int moveval = 0;

int previouspoval = 0;

bool run = false;

int ventval = 100;

int motstate = 0;

int tempbuf[tempbufsize];

int tempmid = 0;

int lival = 0;

int movevalconv = 0;

bool vent = false;

void setup() {
  // put your setup code here, to run once:
  pinMode(microphone, INPUT_PULLUP);
  pinMode(RED_LED,OUTPUT);
  pinMode(BLUE_LED,OUTPUT);
  pinMode(GREEN_LED,OUTPUT);
  pinMode(BG1, OUTPUT);
  pinMode(BG2, OUTPUT);
  pinMode(BG3, OUTPUT);
  pinMode(BG4, OUTPUT);
  pinMode(BG5, OUTPUT);
  pinMode(M1, OUTPUT);
  pinMode(M2, OUTPUT);
  pinMode(39, OUTPUT);
  pinMode(40, OUTPUT);
  pinMode(lightsensor, INPUT);
  pinMode(ventilateur, OUTPUT);
  pinMode(movesensor, INPUT);

  digitalWrite(BG1, LOW);
  digitalWrite(BG2, LOW);
  digitalWrite(BG3, LOW);
  digitalWrite(BG4, LOW);
  digitalWrite(BG5, LOW);
  digitalWrite(M1, LOW);
  digitalWrite(M2, LOW);
  digitalWrite(ventilateur, HIGH);


  currenttime=micros();
  nextprinttime=currenttime+printdelay;

  Serial.begin(9600);
  Serial.println("Début");
  Serial1.begin(9600);
  //Serial1.println("Début");
  //Serial1.println("AT+NAMEG10C");
  //Serial1.println("AT+PIN0000");

  for(int i = 0; i<tempbufsize; i++){
    tempbuf[i]=0;
  }
}

void loop() {
  // put your main code here, to run repeatedly: 
  digitalWrite(RED_LED, HIGH);
	digitalWrite(GREEN_LED, LOW);
  delay(1000);
  digitalWrite(BLUE_LED, HIGH);
  digitalWrite(RED_LED, LOW);
  delay(1000);
  digitalWrite(GREEN_LED, HIGH);
  digitalWrite(BLUE_LED, LOW);
  delay(1000);
  currenttime=micros();
  ::pval=(int) analogRead(microphone);
  //poval=(int) analogRead(potentiometre);
  moveval=(int) (analogRead(movesensor)); //Donne la valeur de la distance ( unité de la machine )

  if(nextprinttime<currenttime){  
	movevalconv = ((moveval * 5.0) / 1024.0)*1000;//convertit les V en distance
    char strmoveval[4]={'0','0','0','0'};
     Serial.println(strmoveval);
    Serial.println(movevalconv);
    sprintf(strmoveval, "%i" , movevalconv);
    //itoa(movevalconv,strmoveval,10);
    char string[20] = "\n1G10C1701";
    Serial.println(strmoveval);
    //strcat(string,strmoveval);
    
	//Serial.println(string);
    strcat(string,"0000");
	//Serial.println(string);
    char strB[strlen(string)];
    for(int i = 0; i<strlen(string); i++){
      strB[i] = string[i];
    }
    char strH[strlen(string)*2] = {0};
    stringToHex(string, strH);
    computeChecksum(strB, string);
    Serial.println(string);
    Serial1.println(string);

    int currt = currenttime;

    while(currenttime<(currt + 2000000)){
      currenttime = micros();
    }
    
}
  if(Serial1.available()){
    Serial.write(Serial1.read());
  }
}
void stringToHex(char str[], char strH[]){
  int i, j;
  for(i=0,j=0;i<strlen(str);i++,j+=2)
    { 
        sprintf((char*)strH+j,"%02X",str[i]);
    }
    strH[j]='\0'; /*adding NULL in the end*/
}

void formatString(char str[], char newStr[]){
  int charNumber = strlen(newStr);

  for(int i = 0; i<strlen(str); i++){
    newStr[i]=str[i];
  }
  for(int i = strlen(str); i<charNumber; i++){
    newStr[i]='0';
  }
}

int computeChecksum(char str[], char strb[]){
  int cchk = 0;

  for(int i = 0; i<strlen(str); i++){
    cchk += str[i];
  }
  cchk = cchk - 10;
  while(cchk>=256){
      cchk = cchk%256;
  }

  if(cchk<=15){
    strcat(strb, "0");
    char strchk[1];
    sprintf(strchk, "%X\n", cchk);
    strcat(strb,strchk);
  }else{
    char strchk[2];
    sprintf(strchk, "%X\n", cchk);
    strcat(strb,strchk);
  }
  
}


