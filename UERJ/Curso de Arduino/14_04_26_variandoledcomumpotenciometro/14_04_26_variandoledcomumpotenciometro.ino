#define pon A5
#define led 3

void setup(){
 pinMode(led, OUTPUT);
 pinMode(pon, INPUT);
 Serial.begin(9600);
}

void loop(){
  int leitura = analogRead(pon);
  
  int val = map(leitura, 0, 1023, 0, 255);
  
  analogWrite(led, val);
  
  Serial.println(leitura);
  delay(50);

}