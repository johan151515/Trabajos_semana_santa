public class Basic extends Plan {
    public Basic(float price) {
        super("Basic", price);
    }

    @Override
    public String[] getServices() {
        return new String[]{"Access to all exercise machines"};
    }

    @Override
    public float calculateCost() {
        return getPrice();
    }
}