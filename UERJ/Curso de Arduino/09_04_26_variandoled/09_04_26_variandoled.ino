#define led 3

void setup()
{
  Serial.begin(9600);
  pinMode(led, OUTPUT);
}

void loop()
{
  for(int cont = 0; cont <= 255; cont++){
    
    Serial.println(cont);
    
    if( cont == 0){
      	delay(1000);
    }
    
	analogWrite(led, cont);
    
    delay(50);
    
  }
}
  