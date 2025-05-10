public class Employee {
    private String name;
    private String identification;
    private double baseSalary;
    private String arlRiskLevel;

    public Employee(String name, String identification, double baseSalary, String arlRiskLevel) {
        this.name = name;
        this.identification = identification;
        this.baseSalary = baseSalary;
        this.arlRiskLevel = arlRiskLevel;
    }

    public String getName() {
        return name;
    }

    public String getIdentification() {
        return identification;
    }

    public double getBaseSalary() {
        return baseSalary;
    }

    public String getArlRiskLevel() {
        return arlRiskLevel;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setIdentification(String identification) {
        this.identification = identification;
    }

    public void setBaseSalary(double baseSalary) {
        this.baseSalary = baseSalary;
    }

    public void setArlRiskLevel(String arlRiskLevel) {
        this.arlRiskLevel = arlRiskLevel;
    }
}