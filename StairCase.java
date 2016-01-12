import java.util.Scanner;


public class StairCase 
{
	public static void main(String[] args)
	{
		System.out.print("Enter the number of stairs desired:");
		Scanner in = new Scanner(System.in);
	    int _n;
	    _n = Integer.parseInt(in.nextLine().trim());
	    StairCase(_n);
    }
	 /*
	  * Complete the function below.
	  */

	    public static void StairCase(int n)
	    {
	         if(n>1 && n<100)
	        	 {	        	 
	                 for(int i = 1; i <= n; i++)
	                     {
	                           for(int index = 1; index <= n-i; index++)
	                           {
	                                System.out.print(" ");
	                           }
	                           int limit = n-i;

	                           for(int index = limit;index<n;index++)
	                           {
	                               System.out.print("#");
	                           }
	                           System.out.println();
	                     }
	             }
	         else
	        	 System.out.println("Only positive numbers and less than 100 accepted");
	     }
}
