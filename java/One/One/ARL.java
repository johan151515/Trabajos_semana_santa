public class ARL extends Deduction {
    private String riskLevel;

    public void setRiskLevel(String riskLevel) {
        this.riskLevel = riskLevel;
    }

    @Override
    public double calcularDeduccion(double baseSalary) {
        double percentage = getPercentageByRiskLevel(this.riskLevel);
        return baseSalary * percentage;
    }

    private double getPercentageByRiskLevel(String riskLevel) {
        switch (riskLevel.toUpperCase()) {
            case "LOW":
                return 0.00522;
            case "MEDIUM":
                return 0.01044;
            case "HIGH":
                return 0.02436;
            default:
                return 0; // Or throw an exception if the level is invalid
        }
    }
}
