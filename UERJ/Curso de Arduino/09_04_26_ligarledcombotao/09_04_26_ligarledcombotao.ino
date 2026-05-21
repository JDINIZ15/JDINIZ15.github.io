
#include <LiquidCrystal_I2C.h>

LiquidCrystal_I2C lcd(0x3F, 16, 2);

void setup(){
  lcd.init();
  lcd.backlight();
  
  lcd.setCursor(0,0);
  lcd.clear();
}

void loop(){
  
  int i = 0;
  
  for(i; i<=32; i++){
    
    
    
    if(i <=16){
      
     lcd.setCursor(i, 0);
      
     lcd.print("Joaquim");
     
     lcd.setCursor((i-1), 0);
     lcd.print(" ");
      
     }
    
     if(i >= 16){
       
     lcd.setCursor((i-16), 1);
       
     lcd.print("Joaquim");
       
     lcd.setCursor((i-17), 1);
     lcd.print(" ");
     }
    delay(200);
  }
  
}
