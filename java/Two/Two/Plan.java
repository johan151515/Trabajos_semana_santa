public abstract class Plan {
    private float price;
    private String name;

    public Plan(String name, float price) {
        this.name = name;
        this.price = price;
    }

    public abstract String[] getServices();
    public abstract float calculateCost();

    public float getPrice() {
        return price;
    }

    public String getName() {
        return name;
    }
}