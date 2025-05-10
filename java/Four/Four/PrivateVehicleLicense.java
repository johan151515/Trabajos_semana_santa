public class PrivateVehicleLicense extends License {
    public PrivateVehicleLicense() {
        super("Private vehicles", 2500000.00, 5);
    }

    @Override
    public double calculateTotalCost() {
        return this.cost; // The total cost for the private vehicle license is the base cost
    }
}