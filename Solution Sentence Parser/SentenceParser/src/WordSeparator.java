/**
 *The WordSeparator class takes the string sentence and separates the words to parse where there is a non-alphabetic character
 */

public class WordSeparator 
{
	String sentence;
	Alphabet alphabet = new Alphabet();
	public WordSeparator(String s)
	{
		sentence = s;
	}
	public void separateWords()
	{
		String word = "";
		for (int i =0; i<sentence.length();i++)
		{	
			if(alphabet.getAlphabet().contains(sentence.charAt(i)))
			{			
				word = word  + sentence.charAt(i);
				if(i==sentence.length()-1)
				{
					if(word.length()<3)
						WordParser.onlyTwoOrLessLetters(word.toLowerCase(), "");
					else
						WordParser.distinctCharacters(word.toLowerCase(), "");
				}
			}	
			else
			{
				if(word.length()<3)
					WordParser.onlyTwoOrLessLetters(word.toLowerCase(), Character.toString(sentence.charAt(i)));
				else
					WordParser.distinctCharacters(word.toLowerCase(), Character.toString(sentence.charAt(i)));
				word="";				
			}		
		}		
	}
}
