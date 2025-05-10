public class Premium extends Plan {
    public Premium(float price) {
        super("Premium", price);
    }

    @Override
    public String[] getServices() {
        return new String[]{"Access to all exercise machines + Group classes + Personal trainer + Wet area"};
    }

    @Override
    public float calculateCost() {
        return getPrice();
    }
}