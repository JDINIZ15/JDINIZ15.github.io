#define btn 2
int cont = 0;
void setup()
{
  pinMode(btn, INPUT);
  Serial.begin(9600);
}

void loop()
{
	int read = digitalRead(btn);
  
  	if(read == 0){
      cont++;
      delay(500);
    }
  Serial.println(cont);
}