#define LDR A5
#define led 2
void setup() {
 pinMode(LDR, INPUT);
 pinMode(led, OUTPUT);
 Serial.begin(9600);
}

void loop() {
  int leitura = analogRead(LDR);
  Serial.println(leitura);
  if(leitura > 500)
	digitalWrite(led, LOW);
  else
	digitalWrite(led, HIGH);
  delay(1000);
}
