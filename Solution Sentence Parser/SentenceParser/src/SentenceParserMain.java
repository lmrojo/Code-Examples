import java.util.Scanner;

/**
 * PP 1.4: In the programming language of your choice, write a program that parses a sentence and replaces each word
 * with the following: first letter, number of distinct characters between first and last character, and last letter.  
 * For example, Smooth would become S3h.  Words are separated by spaces or non-alphabetic characters and these separators
 * should be maintained in their original form and location in the answer.
 * We are looking for accuracy, efficiency and solution completeness. Please include this problem description in the comment at the top of your solution.  
 * The problem is designed to take approximately 1-2 hours.
 */

public class SentenceParserMain 
{
	private static Scanner sc;

	public static void main(String args[])
	{
		boolean execute = true;
		System.out.println("--------->> Welcome to the Sentence Parser program <<----------");
		while(execute)
		{
			System.out.print("Please write a sentence or type 'exit' to close application here-->: ");
			sc = new Scanner(System.in);
			String sentence = sc.nextLine();
			if(sentence.equals("exit"))
				System.exit(0);
			WordSeparator ws = new WordSeparator(sentence);
			ws.separateWords();
			System.out.println();
		}
	}
}
