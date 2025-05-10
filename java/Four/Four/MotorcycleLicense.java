public class MotorcycleLicense extends License {
    public MotorcycleLicense() {
        super("motorcycles", 950000.00, 3);
    }

    @Override
    public double calculateTotalCost() {
        return this.cost; // The total cost for the motorcycle license is the base cost
    }
}