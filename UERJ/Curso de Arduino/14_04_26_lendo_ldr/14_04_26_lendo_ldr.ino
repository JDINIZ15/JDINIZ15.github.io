#define LDR A5
void setup() {
 pinMode(LDR, INPUT);
 Serial.begin(9600);
}

void loop() {
  int leitura = analogRead(LDR);
  Serial.println(leitura);
  delay(1000);
}
