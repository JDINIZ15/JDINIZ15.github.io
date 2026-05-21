#define LED_1_PIN 11
#define LED_2_PIN 10
#define LED_3_PIN 9
#define PIN_DO_BOTAO 4
#define NUMERO_DE_LEDS 3
byte vetorPinosLeds[ NUMERO_DE_LEDS ] = { LED_1_PIN, LED_2_PIN, LED_3_PIN } ;
unsigned long duracaoDebounce = 50; // milissegundos 
unsigned long ultimaTrocaEstadoBotao = 0; 
byte ultimoEstadoDoBotao = HIGH;
byte estadoLed = LOW;
void iniciaTodosLeds()
{
  for( int i = 0; i < NUMERO_DE_LEDS; i++ )
  {
    pinMode ( vetorPinosLeds[ i ] , OUTPUT ) ;
  }
}
void ligaTodosLeds ( bool powerOn )
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
  pinMode ( PIN_DO_BOTAO, INPUT_PULLUP ) ;
}
void loop()
{
  unsigned long timeNow = millis () ;
  if(timeNow - ultimaTrocaEstadoBotao > duracaoDebounce)
  {
    byte estadoDoBotao = digitalRead(PIN_DO_BOTAO);
    if(estadoDoBotao != ultimoEstadoDoBotao)
    {
      ultimaTrocaEstadoBotao = timeNow;
      ultimoEstadoDoBotao = estadoDoBotao;
      if ( estadoDoBotao == HIGH )
      { // o botão foi liberado 
        estadoLed = ( estadoLed == LOW ) ? HIGH : LOW;
        ligaTodosLeds ( estadoLed == HIGH ) ;
      }
    }
	}
}
