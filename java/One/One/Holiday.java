public class Holiday extends Overtime {
    private static final double PERCENTAGE = 2.00;

    @Override
    public double calculate(double baseSalary, int hoursWorked) {
        double normalHourValue = baseSalary / (30 * 8);
        return normalHourValue * PERCENTAGE * hoursWorked;
    }
}