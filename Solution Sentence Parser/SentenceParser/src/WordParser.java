import java.util.LinkedList;

/**
 * The WordParser is an abstract class that detects if there is any duplicates in the word between the last and fist letters
 * When the word is less than 3 words there is no need to loop through the word, for that reason the onlyTwoOrLEssLetters method
 * was implemented
 * 
 */

public abstract class WordParser 
{
	public static void distinctCharacters(String word, String separator)
	{			
		char firstWord = word.charAt(0);
		char lastWord = word.charAt(word.length()-1);
		LinkedList<Character> duplicates = new LinkedList<Character>();
		int number=0;
		for(int i=1;i<word.length()-1;i++)
		{
			if (duplicates.isEmpty())
			{
				duplicates.addFirst(word.charAt(i));				
				number++;
			}
			else if(!duplicates.contains(word.charAt(i)))
			{
				duplicates.add(word.charAt(i));
				number++;			
			}			
		}
		String newWord = Character.toString(firstWord) + Integer.toString(number)+Character.toString(lastWord);
		System.out.print(newWord+separator);	
	}
	public static void onlyTwoOrLessLetters(String word, String separator)
	{
		if(word.length()==2)
		{
			char firstWord = word.charAt(0);
			char lastWord = word.charAt(word.length()-1);
			String newWord = Character.toString(firstWord) + 0 +Character.toString(lastWord);
			System.out.print(newWord+separator);
		}
		else if(word.length()==1)
		{
			char firstWord = word.charAt(0);

			String newWord = Character.toString(firstWord);
			System.out.print(newWord+separator);
		}
		else
			System.out.print(word+separator);	
	}
}
