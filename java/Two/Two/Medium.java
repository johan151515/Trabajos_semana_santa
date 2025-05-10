public class Medium extends Plan {
    public Medium(float price) {
        super("Medium", price);
    }

    @Override
    public String[] getServices() {
        return new String[]{"Access to all exercise machines + Group classes"};
    }

    @Override
    public float calculateCost() {
        return getPrice();
    }
}
