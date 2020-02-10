package classwork;

public class ques18 {
	public static void main(String[] args) {
		
		//System.out.println("Number of vowels =" + vowels("chicken"));
		//sayHi("Rachel", "Dan", 453, true, 53.05);
		System.out.println(vowels("dan"));
	}
	
//	static void sayHi (String nameOne, String nameTwo, int num, boolean tF, double fL) {
//		System.out.println("Hello " + nameTwo + " Are you a liar? " + tF);
//	}
//______________________________________________________________________________________________________________________________________	
	//what i originally had
	
	static int vowels(String word) { 		//parameter -refrence or piece of info you can use 
		//String word = "";
		int vowel = 0;
		//for(int i = 0; i < word.length(); i++) {	 
		//	if (word == ("a") || word[i] == ("e") || word == ("i") || word==("o") || word==("u")); {
		//		vowel++;	word[i]
		//	}
		//}
		
		//miguel helped me and said in java a string is an array of chars
		//the chars are stored as numbers 
		for (char c : word.toCharArray()) { // ['D', 'a', 'n', 't']
//			String theCharacter = String.valueOf(c);
//			boolean t = theCharacter == "d";
//			System.out.println(t);
			if (c == 97 || c == 101 || c == 105 || c == 111 || c == 117) { //a,e,i,o,u
				vowel++;	
			}
		}
		return vowel;	 
	}
//	________________________________________________________________________________________________________________________________
	//miguel told me how to perform the way that i original wanted where the loop would check 
	// all of the characters and see if it was a vowel or not
	
//	static int countVowels (String word) {
//		int vowelCount = 0;
//		String[] stringArray = word.split(""); // ["M", "I", "G", "U", "E", "L"] 
	
	//we defined word as a string so the .split takes apart the value of word and then places it into an array called stringArray
//				
//		
//		for (String letter : stringArray) {
//			if (letter.toCharArray()[0] == 'a' || letter.toCharArray()[0] == 'e' || letter.toCharArray()[0] == 'i' || letter.toCharArray()[0] == 'o' || letter.toCharArray()[0] == 'u') {
//				vowelCount++;	
//			}
//		} 
//		
//		return vowelCount;
//	}
}
