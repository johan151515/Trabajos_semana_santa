public class Main {
    public static void main(String[] args) {
        // Create a user
        User user1 = new User("12345", "Juan", "Pérez", 75.5f, 1.78f);

        // Create the plans
        Basic basicPlan = new Basic(30.0f);
        Medium mediumPlan = new Medium(60.0f);
        Premium premiumPlan = new Premium(90.0f);

        // The user selects a plan
        user1.selectPlan(mediumPlan);

        System.out.println("Identification: " + user1.getIdentification());
        System.out.println("First Name: " + user1.getFirstName());
        System.out.println("Last Name: " + user1.getLastName());
        System.out.println("Weight: " + user1.getWeight() + " kg");
        System.out.println("Height: " + user1.getHeight() + " m");

        if (user1.getSelectedPlan() != null) {
            System.out.println("Selected Plan: " + user1.getSelectedPlan().getName());
            System.out.println("Services: " + String.join(", ", user1.displayServices()));
            System.out.println("Total Cost: $" + user1.calculateTotalCost());
        } else {
            System.out.println("No plan has been selected.");
        }
    }
}