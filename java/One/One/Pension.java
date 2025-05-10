public class Pension extends Deduction {
    private static final double PERCENTAGE = 0.04;

    @Override
    public double calcularDeduccion(double baseSalary) {
        return baseSalary * PERCENTAGE;
    }
}