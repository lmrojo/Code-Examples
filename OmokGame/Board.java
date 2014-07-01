
public class Board 
{
	public String[][] board;
	public boolean occupied;
	public boolean isWon = false;
	public int [][] winningRow = new int [5][5]; 
	int x,y;
	public String winner;
	public Board(int b)
	{
		board = new String[b][b];
		for (int i=0; i<b;i++) 
			for (int j=0; j<b;j++)
				board[i][j]="a";
	}
	public void clean()
	{
		int b = 16;
		board = new String[b][b];
		for (int i=0; i<b;i++) 
			for (int j=0; j<b;j++)
				board[i][j]="a";
	}
	//                                  y       x
	public boolean vertexAvailability(int r, int c, String color)
	{
		x = r;
		y = c;
		if(board[r][c].equalsIgnoreCase("a"))
		{
			board[r][c]=color;
			checkColorLine(color);
			occupied = false;
		}
		else
			occupied = true;
		return occupied;
	}
	public void checkColorLine(String c)
	{
	  // horizontal and vertical lines
      for(int i=0; i<=11;i++)
      {
	    if(board[x][i].equalsIgnoreCase(c) && board[x][i+1].equalsIgnoreCase(c) && 
	       board[x][i+2].equalsIgnoreCase(c)&& board[x][i+3].equalsIgnoreCase(c)&& board[x][i+4].equalsIgnoreCase(c))
	    		{
	    	       for(int clm=0; clm<5;clm++)
	    	       {
	    			winningRow[0][clm]=x; 
	    			winningRow[1][clm]=i+clm;
	    	       }
	    		//	winningRow[1][0]=i; winningRow[1][1]=i+1; winningRow[1][2]=i+2; winningRow[1][3]=i+3; winningRow[1][4]=i+4; 
	    	       winner = c;
	    		   winner(c, "horizontal");
	    		}
        if(board[i][y].equalsIgnoreCase(c) && board[i+1][y].equalsIgnoreCase(c) && 
	 	   board[i+2][y].equalsIgnoreCase(c)&& board[i+3][y].equalsIgnoreCase(c)&& board[i+4][y].equalsIgnoreCase(c))
	     		{
        			for(int clm=0; clm<5;clm++)
        			{
        				winningRow[0][clm]=i+clm;
        				winningRow[1][clm]=y; 
        			}
        			//winningRow[0][0]=i; winningRow[0][1]=i+1; winningRow[0][2]=i+2; winningRow[0][3]=i+3; winningRow[0][4]=i+4; 
        			winner = c;
        	 		winner(c, "vertical");
	    	    }
      }
      // back diagonals
      for(int iX=0; iX<=11; iX++)
      {
    	  for(int iY=0; iY<=11; iY++)
    	  {
    		  if(board[iX][iY].equalsIgnoreCase(c) && board[iX+1][iY+1].equalsIgnoreCase(c) && 
         		       board[iX+2][iY+2].equalsIgnoreCase(c)&& board[iX+3][iY+3].equalsIgnoreCase(c)&& board[iX+4][iY+4].equalsIgnoreCase(c))
         		    		{
    			  				for(int clm=0; clm<5;clm++)
    			  				{
    			  					winningRow[0][clm]=iX+clm; 
    			  					winningRow[1][clm]=iY+clm; 
    			  				}
    			  				winner = c;
    			  				winner(c, "back diagonal");
         		    		}	  
    	  }
      }
      // forward diagonals
      for(int iX=4; iX<=15; iX++)
      {
    	  for(int iY=0; iY<=11; iY++)
    	  {
    		  if(board[iX][iY].equalsIgnoreCase(c) && board[iX-1][iY+1].equalsIgnoreCase(c) && 
         		       board[iX-2][iY+2].equalsIgnoreCase(c)&& board[iX-3][iY+3].equalsIgnoreCase(c)&& board[iX-4][iY+4].equalsIgnoreCase(c))
         		    		{
    			  				for(int clm=0; clm<5;clm++)
    			  				{
    			  					winningRow[0][clm]=iX-clm; 
    			  					winningRow[1][clm]=iY+clm; 
    			  				}
    			  				winner = c;
         		    	        winner(c, "forward diagonal");
         		    		}	  
    	  }
      }     
   	}
	public void winner(String c, String how)
	{
		 System.out.println(c+" won!! "+how);
		 clean();  
	     isWon = true;
	}
	public boolean getStatus()
	{
		return isWon;
	}
}
