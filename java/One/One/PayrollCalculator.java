public class PayrollCalculator {
    public static void main(String[] args) {
        Employee employee = new Employee("Ana Rodriguez", "98765", 2000000, "MEDIUM");

        SubsidyCalculator subsidyCalculator = new SubsidyCalculator();
        double subsidy = subsidyCalculator.calculateSubsidy(employee.getBaseSalary());

        int daytimeHours = 5;
        int nightlyHours = 2;
        int holidayHours = 1;

        Daytime daytimeCalculator = new Daytime();
        Nightly nightlyCalculator = new Nightly();
        Holiday holidayCalculator = new Holiday();

        double daytimePay = daytimeCalculator.calculate(employee.getBaseSalary(), daytimeHours);
        double nightlyPay = nightlyCalculator.calculate(employee.getBaseSalary(), nightlyHours);
        double holidayPay = holidayCalculator.calculate(employee.getBaseSalary(), holidayHours);

        double totalOvertime = daytimePay + nightlyPay + holidayPay;

        Health healthDeduction = new Health();
        Pension pensionDeduction = new Pension();
        ARL arlDeduction = new ARL();

        arlDeduction.setRiskLevel(employee.getArlRiskLevel());

        double health = healthDeduction.calcularDeduccion(employee.getBaseSalary());
        double pension = pensionDeduction.calcularDeduccion(employee.getBaseSalary());
        double arl = arlDeduction.calcularDeduccion(employee.getBaseSalary());

        double totalDeductions = health + pension + arl;
        double finalResult = employee.getBaseSalary() + totalOvertime - totalDeductions;

        System.out.println("<h2>Complete Payroll Calculation</h2>");
        System.out.println("<p><strong>Employee:</strong> " + employee.getName() + " (ID: " + employee.getIdentification() + ")</p>");
        System.out.println("<p><strong>Base Salary:</strong> " + String.format("%,.2f", employee.getBaseSalary()) + "</p>");
        System.out.println("<p><strong>Subsidy:</strong> " + String.format("%,.2f", subsidy) + "</p>");
        System.out.println("<h3>Overtime:</h3>");
        System.out.println("<p><strong>Daytime (" + Daytime.class.getSimpleName() + "):</strong> " + daytimeHours + " hours - Pay: " + String.format("%,.2f", daytimePay) + "</p>");
        System.out.println("<p><strong>Nightly (" + Nightly.class.getSimpleName() + "):</strong> " + nightlyHours + " hours - Pay: " + String.format("%,.2f", nightlyPay) + "</p>");
        System.out.println("<p><strong>Holiday (" + Holiday.class.getSimpleName() + "):</strong> " + holidayHours + " hours - Pay: " + String.format("%,.2f", holidayPay) + "</p>");
        System.out.println("<p><strong>Total Overtime:</strong> " + String.format("%,.2f", totalOvertime) + "</p>");
        System.out.println("<h3>Deductions:</h3>");
        System.out.println("<p><strong>Health (" + Health.class.getSimpleName() + "):</strong> " + String.format("%,.2f", health) + "</p>");
        System.out.println("<p><strong>Pension (" + Pension.class.getSimpleName() + "):</strong> " + String.format("%,.2f", pension) + "</p>");
        System.out.println("<p><strong>ARL (" + ARL.class.getSimpleName() + "):</strong> " + String.format("%,.2f", arl) + "</p>");
        System.out.println("<p><strong>Total Deductions:</strong> " + String.format("%,.2f", totalDeductions) + "</p>");
        System.out.println("<p><strong>Final Result:</strong> " + String.format("%,.2f", finalResult) + "</p>");
    }
}
