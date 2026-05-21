#include <Servo.h>
#define SERVO 0

Servo servomotor;

void setup(){
  servomotor.attach(SERVO);
}

void loop(){
  int rot = 0;
  
  for(rot; rot <=180; rot++){
    servomotor.write(rot);
    delay(20);
  }
  
  for(rot; rot >=0; rot--){
    servomotor.write(rot);
    delay(20);
  }
}