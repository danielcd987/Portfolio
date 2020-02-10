package classwork;
//from the textbook on page 66
public class ques219_predcredit {
	private double apr;
	
	//constructor for this class
	public PredatoryCreditCard extends CreditCard(String cust, String bk, String acnt, int lim,
			double initialBal,double rate) {
		super(cust,bk,acnt,lim,initialBal); //this produces an error because there is no credit card class 
		apr = rate;
	}
//A new method for assesing monthly interest charges
	public void processMonth() {
		if(balance > 0) {	//only charge interest on a positive balance
			double monthlyFactor = Math.pow(1 + apr, 1.0/12 ); //compute monthly rate
			balance *= monthlyFactor;	
			
			//Modification to the class 
			latefee = balance * float(.10);
			latefee + balance;
		}
	}
//overriding the charge method defined in the superclass
	public boolean charge(double price) {
		boolean isSuccess = super.charge(price);
		if(!isSuccess)
			balance +=5;
		return isSuccess;
	}
}
