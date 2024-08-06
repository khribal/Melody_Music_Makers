function createBarChart(containerId, data) {
    const container = d3.select(containerId);

    function updateChart() {
        const containerWidth = container.node().getBoundingClientRect().width;
        const containerHeight = 300; // Fixed height for simplicity

        const margin = { top: 20, right: 30, bottom: 40, left: 40 };
        const width = containerWidth - margin.left - margin.right;
        const height = containerHeight - margin.top - margin.bottom;

        // Remove existing SVG if present
        container.selectAll("svg").remove();

        // Create SVG element with viewBox for responsiveness
        const svg = container.append("svg")
            .attr("width", containerWidth)
            .attr("height", containerHeight)
            .attr("viewBox", `0 0 ${containerWidth} ${containerHeight}`)
            .attr("preserveAspectRatio", "xMidYMid meet");

        const x = d3.scaleBand()
            .domain(data.map(d => d.instrument))
            .range([0, width])
            .padding(0.1);

        const y = d3.scaleLinear()
            .domain([0, d3.max(data, d => d.count)])
            .nice()
            .range([height, 0]);

        const g = svg.append("g")
            .attr("transform", `translate(${margin.left},${margin.top})`);

        g.append("g")
            .attr("class", "x-axis")
            .attr("transform", `translate(0,${height})`)
            .call(d3.axisBottom(x));

        g.append("g")
            .attr("class", "y-axis")
            .call(d3.axisLeft(y).ticks(5));

        g.selectAll(".bar")
            .data(data)
            .enter().append("rect")
            .attr("class", "bar")
            .attr("x", d => x(d.instrument))
            .attr("y", d => y(d.count))
            .attr("width", x.bandwidth())
            .attr("height", d => height - y(d.count))
            .attr("fill", "steelblue");
    }

    // Initial chart creation
    updateChart();

    // Attach resize event listener
    window.addEventListener("resize", updateChart);
}

// Data for Instrument Graph 1
const instrumentData1 = [
    { instrument: "Guitar", count: 40 },
    { instrument: "Piano", count: 30 },
    { instrument: "Violin", count: 20 },
    { instrument: "Drums", count: 10 }
];

// Data for Instrument Graph 2
const instrumentData2 = [
    { instrument: "Guitar", count: 40 },
    { instrument: "Piano", count: 30 },
    { instrument: "Violin", count: 20 },
    { instrument: "Drums", count: 10 }
];

// Create bar charts
createBarChart("#instrument-graph1", instrumentData1);
createBarChart("#instrument-graph2", instrumentData2);
