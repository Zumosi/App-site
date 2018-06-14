#define movesensor 25
int moveval = 0;
int port = 26;  // port A0 utilisé pour lire la tension appliquée     
int valeur = 0;  
float vin = 0;

void setup() {
  // put your setup code here, to run once:
  pinMode(RED_LED,OUTPUT);
  pinMode(BLUE_LED,OUTPUT);
  pinMode(GREEN_LED,OUTPUT);
  pinMode(movesensor, INPUT);


  Serial.begin(9600);
  Serial.println("Début");
  Serial1.begin(9600);
  //Serial1.println("Début");
  //Serial1.println("AT+NAMEG10C");
  //Serial1.println("AT+PIN0000");
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
  /*moveval=(int) (analogRead(movesensor));
  Serial.println(moveval);
  Serial1.println(moveval);*/
  // Lit l’entrée analogique A0 
  valeur = analogRead(port);    
  // convertit l’entrée en volt 
  vin = (valeur * 5.0) / 1024.0; 
   Serial.println("interface = "); 
   Serial.println(vin);
   delay(1000);
   
}
/* 
  Lecture Entrée analogique 
  ce programme permet d’afficher la tension sur une entrée analogique 
  si l’entrée est supérieur à 3.3v la LED sur le port 13 s’allume 
*/

          

 
   
