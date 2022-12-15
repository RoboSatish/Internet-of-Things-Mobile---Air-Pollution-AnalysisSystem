void setup() 
{
  Serial.begin(9600);
}

void loop() 
{
  int i=0,j=0,k=0;
  
  i=analogRead(A0);
  j=analogRead(A1);
  k=analogRead(A2);
  Serial.print(i);
  Serial.print(",");
  Serial.print(j);
  Serial.print(",");
  Serial.println(k);
  delay(5);
}
