package Three.Three;
public class Main {
    public static void main(String[] args) {
        FirstLaw firstLaw = new FirstLaw(10.5f);
        SecondLaw secondLaw = new SecondLaw(10.2f, 26.1f, 16.0f);
        ThirdLaw thirdLaw = new ThirdLaw(50.0f);

        System.out.println("<h2>" + firstLaw.getName() + "</h2>");
        System.out.println("Force: " + firstLaw.getForce() + " N<br>");
        System.out.println("<p>" + firstLaw.getExplanation() + "</p><br>");

        System.out.println("<h2>" + secondLaw.getName() + "</h2>");
        System.out.println("Calculated Force: " + secondLaw.calculateLaw() + " N<br>");
        System.out.println("<p>" + secondLaw.getExplanation() + "</p><br>");

        System.out.println("<h2>" + thirdLaw.getName() + "</h2>");
        System.out.println("Action: " + thirdLaw.getAction() + " N<br>");
        System.out.println("Reaction: " + thirdLaw.getReaction() + " N<br>");
        System.out.println("<p>" + thirdLaw.getExplanation() + "</p><br>");
    }
}
