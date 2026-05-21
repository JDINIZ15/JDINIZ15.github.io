int branco = 2;
int vermelho = 3;
int verde = 4;
int amarelo = 5;
int azul = 6;

void setup()
{
  Serial.begin(9600);
  pinMode(branco, OUTPUT);
  pinMode(vermelho, OUTPUT);
  pinMode(amarelo, OUTPUT);
  pinMode(verde, OUTPUT);
  pinMode(azul, OUTPUT);
}

void termino(int a, int b, int c, int d, int e){
  for(int i = 0; i < 3; i++){
    digitalWrite(a, HIGH);
    digitalWrite(b, HIGH);
    digitalWrite(c, HIGH);
    digitalWrite(d, HIGH);
    digitalWrite(e, HIGH);
    delay(500);
    digitalWrite(a, LOW);
    digitalWrite(b, LOW);
    digitalWrite(c, LOW);
    digitalWrite(d, LOW);
    digitalWrite(e, LOW);
    delay(500);
  }
}

void Semaforo(int a, int b, int c, int d, int e, float i){
  digitalWrite(a, HIGH);
  digitalWrite(b, LOW);
  digitalWrite(c, LOW);
  digitalWrite(d, LOW);
  digitalWrite(e, LOW);
  delay(i);
}
void loop()
{
  Serial.println("COMEÇOU!!");

  termino(branco, vermelho, verde, amarelo, azul);
  for(float i = 10; i >= 0; ){
    float tempo = i * 100;

    Semaforo(branco, amarelo, verde, vermelho, azul, tempo);
    Semaforo(vermelho, branco, verde, amarelo, azul, tempo);
    Semaforo(verde, vermelho, amarelo, branco, azul, tempo);
    Semaforo(amarelo, vermelho, verde, branco, azul, tempo);
    Semaforo(azul, branco, vermelho, verde, amarelo, tempo);

    Serial.println(i);

    if(i <= 3)
      i -= 0.1;
    else
      i--;
  }
}