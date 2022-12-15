
import de.bezier.data.sql.*;  
import processing.serial.*;   

MySQL msql;      
String[] a;
int end = 10;   
String serial;   
Serial port;     
int  count=0;


void setup() {
 /*String user     = "root";
  String pass     = "";
  String database = "serverweb";
  
  
  /*
  $servername = "localhost";
$username = "iautolab_girish";
$password = "girish12##";
$dbname = "iautolab_serverweb";
 
  String user     = "iautolab_girish";
  String pass     = "girish12##";
  String database = "iautolab_serverweb";
  
  
    
 String user     = "V7k816NRQY";
  String pass     = "DrYpaH64Kb";
  String database = "V7k816NRQY";
  
   String user     = "iautolab_girish";
  String pass     = "girish12##";
  String database = "iautolab_serverweb";  
  


  

   
  */
 
     String user     = "sql3347765";
  String pass     = "7P9q27cwwx";
  String database = "sql3347765"; 
  
 
  
  
  
//bh-ht-6.webhostbox.net
//sql3.freemysqlhosting.net
  msql = new MySQL( this, "sql3.freemysqlhosting.net", database, user, pass);
    
  port = new Serial(this, Serial.list()[0], 115200);
  port.clear(); 
  serial = port.readStringUntil(end); 
  serial = null; 
}

void draw() 
{
  
  while (port.available() > 0) 
  { 
    
    serial = port.readStringUntil(end);
  }
    if (serial != null) 
    {  
     
      a = split(serial, ',');  
      println(a[0]); 
      println(a[1]);
      println(a[2]);
    // println(a[3]);
      delay(3000);
     
      function();
    }
}

void function()
{
  
  
  if ( msql.connect() )
    {
       
        msql.query( "insert into data(id,Tilt,Temp,Heart,DateTime)values(NULL,"+a[0]+","+a[1]+","+a[2]+",NOW())" );
        //msql.query( "insert into reg(id,name,admission,Heart,DateTime)values(NULL,"+a[0]+","+a[1]+","+a[2]+",NOW())" );
    }
    else
    {
        // connection failed !
    }
    msql.close();  
}
