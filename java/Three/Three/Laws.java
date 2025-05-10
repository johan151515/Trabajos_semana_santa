package Three.Three;
public abstract class Laws {
    protected String name;
    protected String explanation;

    public Laws(String name) {
        this.name = name;
    }

    public String getName() {
        return name;
    }

    public String getExplanation() {
        return explanation;
    }

    public abstract float calculateLaw();
}