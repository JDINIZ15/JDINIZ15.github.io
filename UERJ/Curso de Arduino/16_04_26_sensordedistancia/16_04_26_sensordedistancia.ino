#define trigger 0 
#define echo 1

void setup(){
  Serial.begin(9600);
  pinMode(trigger, OUTPUT);
  pinMode(echo, INPUT);
}

void loop(){
  digitalWrite(trigger, LOW);
  delayMicroseconds(10);
  digitalWrite(trigger, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigger, LOW);
  
  float leitura = pulseIn(echo, HIGH);
  float distancia = (leitura/2) / 29.1;
  Serial.println(distancia);
  delay(100);
}