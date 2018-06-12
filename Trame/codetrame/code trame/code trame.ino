

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

#define tempsensor 24

#define tempbufsize 1000

#define lightsensor 25

int zone = MAXVAL / 5;

unsigned long pval=0;

unsigned long poval=0;

unsigned long printdelay=120000000;

unsigned long currenttime=0;

unsigned long nextprinttime=6000000;

unsigned int ventdelay=5000000;

unsigned long nextventtime=0;

unsigned int motdelay=10000;

unsigned long nextmottime=0;


unsigned int tempprobedelay=10000;

unsigned long nexttempprobetime=0;

int tempval = 0;

int previouspoval = 0;

bool run = false;

int ventval = 100;

int motstate = 0;

int tempbuf[tempbufsize];

int tempmid = 0;

int lival = 0;

bool vent = false;

void setup() {
  // put your setup code here, to run once:
  pinMode(microphone, INPUT_PULLUP);
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
  pinMode(tempsensor, INPUT);

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
  //Serial1.println("AT+NAMEG4D");
  //Serial1.println("AT+PIN0000");

  for(int i = 0; i<tempbufsize; i++){
    tempbuf[i]=0;
  }
}

void loop() {
  // put your main code here, to run repeatedly: 
  currenttime=micros();
  pval=(int) analogRead(microphone);
  poval=(int) analogRead(potentiometre);
  tempval=(int) (analogRead(tempsensor)*29)/350; //Donne la valeur de temperature en degres celsius
  lival = (int) (analogRead(lightsensor)*100)/MAXVAL;

  if(nexttempprobetime<currenttime){
    for(int i=tempbufsize-2; i>=0; i--){
      tempbuf[i+1]=tempbuf[i];
    }
    tempbuf[0] = tempval;
  
    tempmid = 0;
  
    for(int i = 0; i<tempbufsize; i++){
      tempmid += tempbuf[i];
    }
  
    tempmid=tempmid/tempbufsize;

  }
  
  if(nextprinttime<currenttime){  
    Serial.println(lival);
    char strtempval[2];
    sprintf(strtempval, "%d" , tempmid);
    char strtempvalform[strlen(strtempval)] = {0};
    //formatString(strtempval, strtempvalform);
    char string[] = "\n1004D130100";
    strcat(string, strtempval);
    strcat(string, "0000");
    char strB[strlen(string)+2];
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
    
    char strlival[2];
    sprintf(strlival, "%d" , lival);
    char strlivalform[strlen(strlival)] = {0};
    //formatString(strtempval, strlivalform);
    char stringe[] = "\n1004D1L0100";
    strcat(stringe, strlival);
    strcat(stringe, "0000");
    char strBi[strlen(stringe)+2];
    for(int i = 0; i<strlen(stringe); i++){
      strBi[i] = stringe[i];
    }
    char strHi[strlen(stringe)*2] = {0};
    stringToHex(stringe, strHi);
    computeChecksum(strBi, stringe);
    Serial.println(stringe);
    Serial1.println(stringe);
    
    nextprinttime=currenttime+printdelay;
  }
 
  
  if(pval<zone){
     //digitalWrite(BG1, HIGH);
  digitalWrite(BG2, LOW);
  digitalWrite(BG3, LOW);
  digitalWrite(BG4, LOW);
  digitalWrite(BG5, LOW);
  }else if(pval<2*zone){
     //digitalWrite(BG1, LOW);
  digitalWrite(BG2, HIGH);
  digitalWrite(BG3, LOW);
  digitalWrite(BG4, LOW);
  digitalWrite(BG5, LOW);
  }else if(pval<3*zone){
     //digitalWrite(BG1, LOW);
  digitalWrite(BG2, LOW);
  digitalWrite(BG3, HIGH);
  digitalWrite(BG4, LOW);
  digitalWrite(BG5, LOW);
  }else if(pval<4*zone){
     //digitalWrite(BG1, LOW);
  digitalWrite(BG2, LOW);
  digitalWrite(BG3, LOW);
  digitalWrite(BG4, HIGH);
  digitalWrite(BG5, LOW);
  }else{
     //digitalWrite(BG1, LOW);
  digitalWrite(BG2, LOW);
  digitalWrite(BG3, LOW);
  digitalWrite(BG4, LOW);
  digitalWrite(BG5, HIGH);
  }

if(poval>(previouspoval*1.05) or poval<(previouspoval*0.95)){
   if(poval<2*zone){
      if(true){
        runMotorBackward(255-(poval*255/(2*zone)));
        //analogWrite(ventilateur, 50);
        run=true;
      }
      
    }else if(poval<3*zone){
       if(true){
         stopMotor();
         //digitalWrite(ventilateur, HIGH);
         run=false;
       }
    }else{
      if(true){
         runMotorForward(((poval-(3*zone))*255)/(MAXVAL-3*zone));
         //analogWrite(ventilateur, 0);
         run=true;
      }
    }
    nextmottime=currenttime+motdelay;
    previouspoval=poval;
}
//digitalWrite(ventilateur, LOW);
/*
if(nextventtime<currenttime){  
    if(ventval>0 and ventval<255){
      analogWrite(ventilateur, ventval);
      ventval=ventval-1;
      nextventtime=currenttime+ventdelay;
    }else if(ventval==255){
      analogWrite(ventilateur, 255);
      ventval=ventval-150;
      nextventtime=currenttime+10000000;
    }
    else{
      nextventtime=currenttime+10000000;
      ventval=255;
    }
    
 }
*/
if(nextventtime<currenttime){  
    if(vent){
      digitalWrite(ventilateur, LOW);
      vent=false;
    }else{
      digitalWrite(ventilateur, HIGH);
      vent=true;
    }
  nextventtime=currenttime+ventdelay;
    
 }
/*
  if(nextmottime<currenttime){
    nextmottime=currenttime+motdelay;
    if(motstate == 0){
      digitalWrite(M1,HIGH);
      digitalWrite(M2, LOW);
      motstate=1;
    }else if(motstate == 1){
      digitalWrite(M1,HIGH);
      digitalWrite(M2, LOW);
      motstate=2;
    }else if(motstate==2){
      digitalWrite(M1,HIGH);
      digitalWrite(M2, LOW);
      motstate=0;
    }
    
  }
*/
  if(Serial1.available()){
    Serial.write(Serial1.read());
  }
  
  
}

void runMotorForward(int pwm){
  analogWrite(M1, pwm);
  digitalWrite(M2, LOW);
  digitalWrite(39, pwm);
  digitalWrite(40, LOW);
}

void runMotorBackward(int pwm){
  digitalWrite(M1, LOW);
  analogWrite(M2, pwm);
  digitalWrite(39, LOW);
  analogWrite(40, pwm);
}

void stopMotor(){
  analogWrite(M1, 0);
  digitalWrite(M2, LOW);
  digitalWrite(39, LOW);
  digitalWrite(40, LOW);
  
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

