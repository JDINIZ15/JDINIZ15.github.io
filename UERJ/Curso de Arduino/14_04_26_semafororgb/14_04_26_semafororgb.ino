#define r 2
#define b 3 
#define g 4
void setup()
{
  pinMode(r, OUTPUT);
  pinMode(g, OUTPUT);
  pinMode(b, OUTPUT);
}

void loop()
{
  digitalWrite(r, HIGH);
  digitalWrite(g, LOW);
  digitalWrite(b, LOW);
  delay(1000); // Wait for 1000 millisecond(s)
  digitalWrite(r, HIGH);
  digitalWrite(g, HIGH);
  digitalWrite(b, LOW);
  delay(1000); // Wait for 1000 millisecond(s)
  digitalWrite(r, LOW);
  digitalWrite(g, HIGH);
  digitalWrite(b, LOW);
  delay(1000); 
}