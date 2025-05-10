public class PublicServiceVehicleLicense extends License {
    public PublicServiceVehicleLicense() {
        super("Public service vehicles", 1900000.00, 4);
    }

    @Override
    public double calculateTotalCost() {
        return this.cost; // The total cost for the public service vehicle license is the base cost
    }
}