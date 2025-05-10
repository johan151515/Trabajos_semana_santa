public class User {
    private String identification;
    private String firstName;
    private String lastName;
    private float weight;
    private float height;
    private Plan selectedPlan;

    public User(String identification, String firstName, String lastName, float weight, float height) {
        this.identification = identification;
        this.firstName = firstName;
        this.lastName = lastName;
        this.weight = weight;
        this.height = height;
        this.selectedPlan = null;
    }

    public void selectPlan(Plan plan) {
        this.selectedPlan = plan;
    }

    public String[] displayServices() {
        if (this.selectedPlan != null) {
            return this.selectedPlan.getServices();
        }
        return new String[0];
    }

    public float calculateTotalCost() {
        if (this.selectedPlan != null) {
            return this.selectedPlan.calculateCost();
        }
        return 0.0f;
    }

    // Getter methods
    public String getIdentification() {
        return identification;
    }

    public String getFirstName() {
        return firstName;
    }

    public String getLastName() {
        return lastName;
    }

    public float getWeight() {
        return weight;
    }

    public float getHeight() {
        return height;
    }

    public Plan getSelectedPlan() {
        return selectedPlan;
    }
}