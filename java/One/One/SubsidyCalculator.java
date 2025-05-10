public class SubsidyCalculator {
    private static final double MINIMUM_WAGE = 1160000.0;

    public double calculateSubsidy(double baseSalary) {
        if (baseSalary > (MINIMUM_WAGE * 2)) {
            return 0;
        } else {
            return MINIMUM_WAGE;
        }
    }

    public double getMinimumWage() {
        return MINIMUM_WAGE;
    }
}