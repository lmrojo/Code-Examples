
import javax.swing.JApplet;
import java.awt.Color;
import java.awt.Graphics;
import java.awt.Panel;
import java.awt.Label;
import java.awt.event.MouseEvent;
import java.awt.event.MouseListener;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.JButton;
import javax.swing.JOptionPane;
import javax.swing.JTextField;
import javax.swing.JLabel;
import javax.swing.JTextArea;


/**This class sets the GUI interface of the game and sets the grid of the clickable area where the player in turn sets the stone
 */

public class OmokApplet extends JApplet implements MouseListener
 {
    /**
     * Create the applet.
     */
	
	/**isVertex field is to verify intersection of grids
    */
	boolean isVertex = false;
	/**grids field to set the grids only once on the GUI
	 */
	boolean grids = false;
	/**reset field to set new game
	    */
	boolean reset=false;
	/**squareClicked field verify player clicked on the grid area
	    */
	boolean squareClicked;
	/**nextColorInTurn is to control whose turn is it 
	    */
    int nextColorInTurn = 0;
    /**initcolor field always black color will start the game
	    */
    int initcolor =0; 
    int xpos=50;
    int ypos=-50;
    /**vertex[][] to store the coordinates
	    */
	int vertex[][] = new int[2][16];
	/**endOfGame check if game has ended
	    */
	boolean endOfGame=false; // to check if the game has ended
	/**Actual board
	    */
	Board board = new Board(16); // game board
	/**x coordinate of mouse click
	    */
	int x; // x coordinate from mouse click for the first player
	/**y coordinate of mouse click
	    */
	int y; // y coordinate from mouse click for the first player
	againstComputer computer = new againstComputer(16);
	int ovalCounter = 0;
	private JTextField txtLabel;
	private JTextArea textWinner = new JTextArea();
	private JTextArea textArea = new JTextArea();
	/**Constructor OmokApplet
	 */
    
    public OmokApplet()
     {
        //set GUI panel   
        getContentPane().setEnabled(false);
        getContentPane().setLayout(null);
        textArea.setText("Black goes first\nversus player\nor versus computer");
        Panel panel = new Panel();
        panel.setBackground(Color.WHITE);
        panel.setBounds(33, 119, 125, 280);
        getContentPane().add(panel);
        panel.setLayout(null);
        
        JButton newGame = new JButton("New Game");
        newGame.addActionListener(new ActionListener()
        {
        	public void actionPerformed(ActionEvent e) 
        	{
        		 int n = JOptionPane.showConfirmDialog(
        		            null,
        		            "Start new game?",
        		            "Alert!",
        		            JOptionPane.YES_NO_OPTION);
                  System.out.println(n);
                  JOptionPane.showMessageDialog(null, "You start first, you are black stones!");
                //to set a new game
                  if(n==0)
                  {
                   repaint();
                   reset = true;
                  }
        	}
        });
        newGame.setBounds(10, 10, 105, 48);
                
        panel.add(newGame);  
        
        JButton btnNewButton = new JButton("You vs PC");
        btnNewButton.addActionListener(new ActionListener() {
        	public void actionPerformed(ActionEvent arg0) {
        		int n = JOptionPane.showConfirmDialog(
    		            null,
    		            "Start new game vs Computer?",
    		            "Alert!",
    		            JOptionPane.YES_NO_OPTION);
        		JOptionPane.showMessageDialog(null, "You start first, you are black stones!");	
              System.out.println(n);
            //to set a new game
              if(n==0)
              {
               reset = true;
               computer.gameComputer = true;
        	   repaint();
        	   //aqui va lo de against computer   	   
              }
        	}
        });
        btnNewButton.setBounds(10, 73, 105, 50);
        panel.add(btnNewButton);
        
        JLabel lblStatusOfGame = new JLabel("Status of Game:");
        lblStatusOfGame.setBounds(10, 142, 105, 14);
        panel.add(lblStatusOfGame);
        
        txtLabel = new JTextField();
        txtLabel.setBounds(10, 157, 115, 20);
        panel.add(txtLabel);
        txtLabel.setText("in progress...");
        txtLabel.setColumns(10);
        
        JLabel lblWinner = new JLabel("Winner:");
        lblWinner.setBounds(10, 188, 46, 14);
        panel.add(lblWinner);
        
        
        textWinner.setBounds(60, 188, 65, 16);
        panel.add(textWinner);
        
        
        textArea.setBounds(10, 213, 105, 56);
        panel.add(textArea);
        Panel panel_1 = new Panel();
        panel_1.setBackground(Color.WHITE);
        panel_1.setBounds(341, 458, 44, 32);
        getContentPane().add(panel_1);
        panel_1.setLayout(null);  
        //label displaying who is next
        Label label = new Label("Turn:");
        label.setBounds(10, 10, 39, 22);
        panel_1.add(label);
     } 
    
    /**Method to initialize the GUI interface
     * @param none
     * @return void
     */
    public void init() 
     {        
        this.setSize(700, 500);
        addMouseListener( this );
        //store the vertexes on a 2d array
        int x=0;
    		for(int y=0;y<16;y++)
    		{
    			 vertex[x][y] = 230+y*25;
    			 System.out.print(" "+vertex[x][y]);
    		}
    		x=1;
    		System.out.println();
    		for(int y=0;y<16;y++)
    		{
    			 vertex[x][y] = 40+y*25;
    			 System.out.print(" "+vertex[x][y]);
    		}
    		
    	
     }
    /**To set the stones and draw the grid on the GUI
     * @param none
     * @return void
     */ 
    public void textLegend()
    {
    	 //textField.setText("Click on the squared area to start a new game");
         textArea.setText("Click on squared\n area to start\n a new game");
    }
    public void paint(Graphics g) 
    { 
      if(board.isWon)
      {
       reset = true;
       board.isWon= false;
      }
      if(!reset)
    	{	
    	// always the first turn will be for color black
    	if(initcolor==0)
    		{
    			g.setColor(Color.BLACK);
    			g.fillOval(400, 465, 20, 21);
    			initcolor=1;
    		}
              
        g.setColor(Color.black);
      //set the grids one time only, not everytime paint method is executed
        if(!grids)
        	{    	
        		for(int x = 0; x<18;x++)
        		{
        			g.drawLine(215, 25+x*25, 640, 25+x*25);
        		}
        		for(int x = 0; x<18;x++)
        		{
        			g.drawLine(215+x*25, 25, 215+x*25, 449);
        		}
        		grids=true;
        	}
        //check if clicked on clickable area
        if (squareClicked)
        {
        //if true check if is a within vertex boudaries
          checkArea();	
          //these variables are the coordinates once the checkArea returns vertex clicked belongs to an actual intersection of the grids
          int setCoordinateYpos = ypos;
          int setCoordinateXpos = xpos;  
        //if click on vertex boundaries, set the stone and will check whose turn is next  
          if (isVertex)
          	{
        	  xpos= (xpos-230)/25;
    		  ypos= (ypos-40)/25;
    		 
    		
        	  if(nextColorInTurn==0)
        	  	{
        		  //if nextColorInTurn is 0 then checks the availability of the vertex where the black stone will be placed
        		  board.vertexAvailability(ypos, xpos, "black"); 
        		  if(board.occupied==false)
        		  {
        		  //sets the black stone on the position clicked is it is available
        		  g.setColor(Color.BLACK);
        		  g.fillOval(setCoordinateXpos, setCoordinateYpos, 20, 21);
        		  ovalCounter++;
        		  if(ovalCounter==256)
        	      {
        			  textWinner.setText("Draw!");
        	    	  System.out.println("Draw!");
        	    	  reset = true;
        	      }
        		  System.out.println(setCoordinateXpos+", "+setCoordinateYpos);
        		  System.out.println(xpos+", "+ypos);
        		  txtLabel.setText("BLACK set: "+xpos+", "+ypos);
        		  //once the black stone is placed, sets the red stone to be next in turn
        		  System.out.println("now red goes");
        		  g.setColor(Color.RED);
        		  g.fillOval(400, 465, 20, 21);
        		  if(board.getStatus())
        		  {
        			     textLegend();
        			     textWinner.setText(" "+board.winner); 
        			     int setOvalX = 0; 
        		    	 int setOvalY = 0;
        		    	 for(int c = 0; c<5; c++)
        		    	 {
        		    		 for(int r = 0; r<2; r++)
        		    		 {
        		    			if(r==0)
        		    			{
        		    				setOvalX = (board.winningRow[r][c]*25)+40;
        		    			}
        		    			if(r==1)
        		    				setOvalY = (board.winningRow[r][c]*25)+230;
        		    		 }
        		    		 g.setColor(Color.green); 
        		    		 g.fillOval(setOvalY,setOvalX, 20, 21);
        		    	 }
        		  }
        		 
        		  nextColorInTurn=1;
        		  }
        		  else
        		  {
        			  txtLabel.setText("Vertex ocuppied");
        			  System.out.println("Already occupied");
        		  }
        		
        	  	}
        	  else
        	  {	  
        		  //if nextColorInTurn is not 0 then checks the availability of the vertex where the red stone will be placed
        		  board.vertexAvailability(ypos, xpos, "red"); 
        		  if(board.occupied==false)
        		  {
        		  //sets the red stone on the position clicked if it is available
        		  g.setColor(Color.RED);
        		  g.fillOval(setCoordinateXpos, setCoordinateYpos, 20, 21);
        		  ovalCounter++;
        		  if(ovalCounter==256)
        	      {
        	    	  System.out.println("Draw!");
        	    	  reset = true;
        	      }
        		  System.out.println(setCoordinateXpos+", "+setCoordinateYpos);
        		  System.out.println(xpos+", "+ypos);
        		  txtLabel.setText("RED set: "+xpos+", "+ypos);
        		  //once the red stone is placed, sets the black stone to be next in turn
        		  System.out.println("now black goes");
        		  g.setColor(Color.BLACK);
        		  g.fillOval(400, 465, 20, 21);
        		  if(board.getStatus())
        		  {
        			 textLegend();
        			 textWinner.setText(" "+board.winner); 
        			 int setOvalX = 0; 
      		    	 int setOvalY = 0; 
      		    	 for(int c = 0; c<5; c++)
      		    	 {
      		    		 for(int r = 0; r<2; r++)
      		    		 {
      		    			if(r==0)
      		    			{
      		    				setOvalX = (board.winningRow[r][c]*25)+40;
      		    			}
      		    			if(r==1)
      		    				setOvalY = (board.winningRow[r][c]*25)+230;
      		    		 }
      		    		 g.setColor(Color.green); 
      		    		 g.fillOval(setOvalY,setOvalX, 20, 21);
      		    	 }
        		  }     		        		 
        		  nextColorInTurn=0;
        		  }
        		  else
        		  {
        			  txtLabel.setText("Vertex ocuppied");
        			  System.out.println("Already occupied");
        		  }
        	
        	  }
        
        	  isVertex =false;
          	}
        }
     }
    	else
        {
    		//reset the game and start over
    	 	   g.clearRect(150, 20, 550, 450);	
    	 	   reset=false;
    	 	   grids=false;
    	 	   nextColorInTurn = 0;
    	 	   initcolor =0;
    	 	   xpos=50;
    	 	   ypos=-50;
    	 	   board.clean();
    	 	   ovalCounter=0;
    	 	   textWinner.setText(""); 
    	 	   txtLabel.setText("");
    	 	   textArea.setText("");
    	 	   repaint();
        } 
    }
    /**Check if point where player clicked belongs to an actual intersection
     * @param none
     * @return boolean 
     */

	public boolean checkArea()
	{	
		int x=0;
		boolean xMeasure = false;
		boolean yMeasure = false;
		int xMeasurement;
		int yMeasurement;
		// check if the subtraccion of the x-value of the clickable vertex minus the x-value of the 
		// player clicked vertex is between the range -6,6
 		for(int y=0;y<16;y++)
 		{
 			xMeasurement=vertex[x][y]-xpos;
 			if(xMeasurement>-6 && xMeasurement<6)
 			{		
 		       	xpos = vertex[x][y];
 		       	xMeasure=true;
 			}
 		}
 		x=1;
 	    // check if the subtraccion of the y-value of the clickable vertex minus the y-value of the 
 		// player clicked vertex is between the range -6,6
 		for(int y=0;y<16;y++)
 		{
 			yMeasurement = vertex[x][y] - ypos;
 			if(yMeasurement>-6 && yMeasurement<6)
 		      {
 			     ypos = vertex[x][y];
 			     yMeasure = true;
 			  }
 		}
 		//if both subtractions of x and y are true then isVertex is true
 		if(xMeasure && yMeasure)
 		{
 			System.out.println();
 			System.out.println("x,y position clicked! "+xpos+", "+ypos);
 			isVertex = true;
 		}
		  return isVertex;
	}
	/**Check if mouse has been clicked
	 * @param MouseEvent
	 * @return void
	 */

	public void mouseClicked(MouseEvent e) 
	{
		xpos = e.getX()-12; 
	    ypos = e.getY()-12;
	    //check if clicked within the boundaries of the grids
        if (xpos > 220 && xpos < 611 && ypos >33 && ypos < 421)
        {
        	squareClicked = true; 
        }
        else
        	squareClicked = false;
        repaint();
	}
	@Override
	public void mousePressed(MouseEvent e) {
		// TODO Auto-generated method stub
		
	}
	@Override
	public void mouseReleased(MouseEvent e) {
		textArea.setText("");
		// TODO Auto-generated method stub
		
	}
	@Override
	public void mouseEntered(MouseEvent e) {
		// TODO Auto-generated method stub	
			
	}
	@Override
	public void mouseExited(MouseEvent e) {
		// TODO Auto-generated method stub
		
	}
	/**Gets x-position of mouse clicked
	 * @param none
	 * @return int
	 */
	private int getYClicked() {
		
		return ypos;
	}
	/**Gets y-position of mouse clicked
	 * @param none
	 * @return int
	 */
	private int getXClicked() {
		
		return xpos;
	}
 }

