#define movesensor 26

unsigned int movevalconv;

unsigned int moveval;

unsigned long printdelay=120000;

unsigned long currenttime=0;

unsigned long nextprinttime=6000;

void setup() {
  // put your setup code here, to run once:
  
  pinMode(movesensor, INPUT);
  currenttime=micros();
  nextprinttime=currenttime+printdelay;

  Serial.begin(9600);
  Serial.println("Début");
  Serial1.begin(9600);
}

void loop() {
  // put your main code here, to run repeatedly: 
  currenttime=micros();
 
  
  if(nextprinttime<currenttime){  
    moveval=(int) (analogRead(movesensor));
  movevalconv = ((moveval * 5.0) / 1024.0)*1000;
    char strtempval[4];
    sprintf(strtempval, "%i" , movevalconv);
    char string[] = "\n1G10C170100000000";
    int j=0;
    for(int i=10; i<14; i++){
      string[i]=strtempval[j];
      j++;
    }
    //strcat(string, strtempval);
         //Serial.println("COUCOU3");

    //strcat(string, "0000");
        // Serial.println("COUCOU4");

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


