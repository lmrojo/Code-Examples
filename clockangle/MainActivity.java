/*
 * The following code calculates the angle according to the time user inputs
 * Eg.if user inputs 12:00, the angle calculated will be 360 degrees
 * Eg if user inputs 12:02, the angle calculated will be 349 degrees 
 * 
*/
package com.example.clockangle;
import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends Activity
{
	String angle;
	double hourInDegrees;
	double minutesInDegrees;
	double totalDegrees;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) 
	{
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);	
		
	}
	
	@Override
	public boolean onCreateOptionsMenu(Menu menu) 
	{
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}
	
	public void ShowAngle(View view)
	{
		
	    angle = ((EditText)findViewById(R.id.time)).getText().toString();
		conversion(angle.toString());
	}
	
	public void conversion(String a)
	{
		TextView resultAngle = (TextView)findViewById(R.id.resultAngle);
		
		TextView displayTimeToAngle = (EditText) findViewById(R.id.time);
		String[] parts = a.split(":");
		if(parts.length==2 &&(numbersOnly(parts[0]) && numbersOnly(parts[1])))
		{
			String h = parts[0];
			String m = parts[1];
		
		if((numbersOnly(h) && numbersOnly(m))||(numbersOnly(h) || numbersOnly(m)))
		{
			
			if( numberRange(h,"hour") && numberRange(m, "minute") )
				{
						
					hourInDegrees = 30*getHourAngle(h) + 0.5*getMinAngle(m);
					minutesInDegrees = 6*getMinAngle(m);
					
					if(hourInDegrees > minutesInDegrees)
						totalDegrees = hourInDegrees - minutesInDegrees; 
					else
						totalDegrees = minutesInDegrees - hourInDegrees;
					
					angle = Double.toString(totalDegrees);
				   
					resultAngle.setText(angle);
					Toast.makeText(getApplicationContext(), "The angle is "+angle.toString(), Toast.LENGTH_LONG).show();
				}
			else
				{
					Toast.makeText(getApplicationContext(), "Time does not exist--> "+angle.toString(), Toast.LENGTH_LONG).show();
					displayTimeToAngle.setText("");
					resultAngle.setText("");
				}
		}
		else
		{
			Toast.makeText(getApplicationContext(), "Number only!\n not--> "+angle.toString(), Toast.LENGTH_LONG).show();
			displayTimeToAngle.setText("");
			resultAngle.setText("");
		}
		}
		else
		{
			Toast.makeText(getApplicationContext(), "Type correct format, not --> "+angle.toString(), Toast.LENGTH_LONG).show();
			displayTimeToAngle.setText("");
			resultAngle.setText("");
		}
		
	}
	
	public double getHourAngle(String h)
	{
		hourInDegrees = Double.parseDouble(h);
		return hourInDegrees;
	}
	
	public double getMinAngle(String m)
	{
		minutesInDegrees = Double.parseDouble(m);
		return minutesInDegrees;
	}
	
	public boolean numberRange(String n,String indicator)
	{
		boolean yesOrNo = false;
		double min;
		 min = Double.parseDouble(n);
		if(indicator.equalsIgnoreCase("hour"))
			{
				if(min>0 && min<13 && numbersOnly(n))
				{
					yesOrNo = true;
				}
			}
		if(indicator.equalsIgnoreCase("minute"))
			{
				if(min>=0 && min<60 && numbersOnly(n))
				{
					yesOrNo = true;
				}			
			}
		return yesOrNo;
	}
		
	//check input numbers only
	 public boolean numbersOnly(String n)
	 { 
		 try
		 {
			 Double.parseDouble(n);
			 return true;
		 }
		 catch( Exception e)  
		 {
			 return false;
		 }
	 }
	
}
