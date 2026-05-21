#define LED_1_PIN 11
#define LED_2_PIN 10
#define LED_3_PIN 9
#define PINO_DO_BOTAO 4
#define NUMERO_DE_LEDS 3
byte vetorPinosLeds[ NUMERO_DE_LEDS ] = { LED_1_PIN, LED_2_PIN, LED_3_PIN } ;
void iniciaTodosLeds() 
{
  for( int i = 0; i < NUMERO_DE_LEDS; i++ ) 
  { 
    pinMode ( vetorPinosLeds[ i ] , OUTPUT ) ;
  }
}

void ligaTodosLeds( bool powerOn ) 
{
  for( int i = 0; i < NUMERO_DE_LEDS; i++ ) 
  { 
    if(powerOn ) 
    { 
      digitalWrite ( vetorPinosLeds[ i ] , HIGH ) ;
    }
    else
    { 
      digitalWrite ( vetorPinosLeds[ i ] , LOW ) ;
    }
  }
}
void setup() 
{
  iniciaTodosLeds() ;
  pinMode ( PINO_DO_BOTAO, INPUT_PULLUP ) ;
}
void loop() 
{
  byte estadoBotao = digitalRead ( PINO_DO_BOTAO) ;
  ligaTodosLeds ( estadoBotao == LOW ) ;
}
