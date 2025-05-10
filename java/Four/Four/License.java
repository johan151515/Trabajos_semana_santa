public abstract class License {
    protected String type;
    protected double cost;
    protected int duration; // In years

    public License(String type, double cost, int duration) {
        this.type = type;
        this.cost = cost;
        this.duration = duration;
    }

    public String getType() {
        return type;
    }

    public double getCost() {
        return cost;
    }

    public int getDuration() {
        return duration;
    }

    public abstract double calculateTotalCost();
}