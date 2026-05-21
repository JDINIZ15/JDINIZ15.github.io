#include <Servo.h>
#define SERVO 0
#define POT A5

Servo servomotor;

void setup(){
  pinMode(POT, INPUT);
  servomotor.attach(SERVO);
}

void setRot(int rot){
  servomotor.write(map(rot, 0, 1023, 0, 180));
}

void loop(){
  setRot(analogRead(POT));
}