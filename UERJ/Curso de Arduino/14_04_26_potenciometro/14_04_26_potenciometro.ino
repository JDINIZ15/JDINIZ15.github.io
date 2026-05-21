#define pon A5

void setup(){

 pinMode(pon, INPUT);
 Serial.begin(9600);
}

void loop(){

  int leitura = analogRead(pon);
  Serial.println(leitura);
  delay(50);

}