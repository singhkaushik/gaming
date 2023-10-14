/**
 * ---------------------------------------
 * This demo was created using amCharts 4.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v4/
 * ---------------------------------------
 */

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create(
  "chartdiv",
  am4plugins_forceDirected.ForceDirectedTree
);

var networkSeries = chart.series.push(
  new am4plugins_forceDirected.ForceDirectedSeries()
);
networkSeries.dataFields.linkWith = "linkWith";
networkSeries.dataFields.name = "name";
networkSeries.dataFields.id = "name";
networkSeries.dataFields.value = "value";
networkSeries.dataFields.children = "children";

networkSeries.nodes.template.label.text = "{name}";
networkSeries.fontSize = 12;
networkSeries.linkWithStrength = 0;

var nodeTemplate = networkSeries.nodes.template;
nodeTemplate.tooltipText = "{name}";
nodeTemplate.fillOpacity = 1;
nodeTemplate.label.hideOversized = true;
nodeTemplate.label.truncate = true;

var linkTemplate = networkSeries.links.template;
linkTemplate.strokeWidth = 1;
var linkHoverState = linkTemplate.states.create("hover");
linkHoverState.properties.strokeOpacity = 1;
linkHoverState.properties.strokeWidth = 2;

nodeTemplate.events.on("over", function (event) {
  var dataItem = event.target.dataItem;
  dataItem.childLinks.each(function (link) {
    link.isHover = true;
  });
});

nodeTemplate.events.on("out", function (event) {
  var dataItem = event.target.dataItem;
  dataItem.childLinks.each(function (link) {
    link.isHover = false;
  });
});

networkSeries.data = [
  {
    name: "Balance",
    value: 130,
    linkWith: ["Withdraw", "Add money"],
    children: [
      {
        name: "View",
        value: 50,
      },
      {
        name: "Choice",
        value: 50,
      },
      {
        name: "MultiCurrency",
        value: 80,
        linkWith: [""],
        children: [
          {
            name: "Add",
            value: 40,
          },
          {
            name: "Close",
            value: 40,
          },
          {
            name: "Convert",
            value: 40,
          },
          {
            name: "Calculate",
            value: 40,
          },
        ],
      },
      {
        name: "-ve bal recovery",
        value: 50,
      },
      {
        name: "No balance",
        value: 50,
      },
    ],
  },
  {
    name: "Cards",
    value: 150,
    linkWith: ["Withdraw"],
    children: [
      {
        name: "Add card",
        value: 100,
      },
      {
        name: "Update",
        value: 70,
      },
      {
        name: "Replace",
        value: 70,
      },
      {
        name: "Confirm",
        value: 100,
        linkWith: [""],
        children: [
          {
            name: "3DS 2.0",
            value: 50,
          },
          {
            name: "3DS 1.0",
            value: 50,
          },
          {
            name: "PPCode",
            value: 50,
          },
        ],
      },
      {
        name: "Delete",
        value: 50,
      },
      {
        name: "partnerships",
        value: 100,
      },
      {
        name: "View",
        value: 100,
        linkWith: [""],
        children: [
          {
            name: "Choice",
            value: 50,
          },
          {
            name: "AutoWithdraw",
            value: 50,
          },
          {
            name: "Promotions",
            value: 50,
            linkWith: [""],
            children: [
              {
                name: "Discover 5% cashback",
                value: 50,
              },
              {
                name: "Chase 2% cashback",
                value: 50,
              },
            ],
          },
        ],
      },
      {
        name: "AutoDetect",
        value: 70,
      },
    ],
  },
  {
    name: "Banks",
    value: 150,
    linkWith: ["Withdraw"],
    children: [
      {
        name: "Add bank",
        value: 100,
        linkWith: ["Joey", "Phoebe"],
        children: [
          {
            name: "Manual",
            value: 70,
            linkWith: ["Authorize", "Confirm"],
          },
          {
            name: "Instant",
            value: 70,
          },
        ],
      },
      {
        name: "Confirm",
        value: 100,
        linkWith: [""],
        children: [
          {
            name: "Instant",
            value: 80,
          },
          {
            name: "2_R_Deposits",
            value: 80,
          },
        ],
      },
      {
        name: "Authorize",
        value: 50,
      },
      {
        name: "View",
        value: 80,
        linkWith: ["Authorize", "Confirm"],
      },
      {
        name: "AutoWithdraw",
        value: 50,
      },
      {
        name: "Delete",
        value: 50,
      },
      {
        name: "Choice",
        value: 50,
      },
    ],
  },
  {
    name: "Withdraw",
    value: 120,
    linkWith: ["Cards", "Banks", "Add bank", "Add card", "Balance"],
    children: [
      {
        name: "Instant",
        value: 100,
        children: [
          {
            name: "Card",
            value: 50,
          },
          {
            name: "Bank",
            value: 50,
          },
        ],
      },
      {
        name: "Standard",
        value: 70,
      },
      {
        name: "Check",
        value: 50,
      },
    ],
  },
  {
    name: "Rewards",
    value: 120,
    linkWith: ["Cards", "partnerships"],
    children: [
      {
        name: "Enroll",
        value: 50,
      },
      {
        name: "AutoEnroll",
        value: 50,
      },
      {
        name: "View",
        value: 50,
      },
      {
        name: "Unenroll",
        value: 50,
      },
    ],
  },
  {
    name: "Add money",
    value: 100,
    linkWith: ["Balance", "Banks", "Add bank"],
    children: [
      {
        name: "Standard",
        value: 50,
      },
      {
        name: "Topup",
        value: 50,
      },
      {
        name: "GreenDot",
        value: 50,
      },
    ],
  },
  {
    name: "Wallets",
    value: 100,
    linkWith: ["Banks", "Add bank", "Balance", "Cards"],
    children: [
      {
        name: "GooglePay",
        value: 80,
        linkWith: [""],
        children: [
          {
            name: "Topup",
            value: 50,
          },
          {
            name: "Backup funding",
            value: 50,
          },
        ],
      },
      {
        name: "SamsungPay",
        value: 50,
      },
      {
        name: "ChasePay",
        value: 80,
        linkWith: ["Add card"],
        children: [
          {
            name: "Link",
            value: 40,
          },
          {
            name: "Remove",
            value: 40,
          },
        ],
      },
    ],
  },
  {
    name: "Compliance",
    value: 80,
    linkWith: ["Balance", "Banks", "Cards", "Add money", "Withdraw"],
    children: [
      {
        name: "KYC",
        value: 50,
      },
      {
        name: "SSN",
        value: 50,
      },
      {
        name: "ID",
        value: 50,
      },
    ],
  },
  {
    name: "Risk",
    value: 80,
    linkWith: ["Balance", "Banks", "Cards", "Add money", "Withdraw"],
    children: [
      {
        name: "challange",
        value: 50,
      },
      {
        name: "Decline",
        value: 50,
      },
      {
        name: "Pending",
        value: 50,
      },
    ],
  },
  {
    name: "Synergies",
    value: 80,
    linkWith: ["Banks", "Cards"],
    children: [
      {
        name: "Merchants",
        value: 50,
        children: [
          {
            name: "95% of Wallet capabilities",
            value: 50,
          },
          {
            name: "Large",
            value: 50,
            children: [
              {
                name: "Dual users",
                value: 50,
              },
            ],
          },
        ],
      },
      {
        name: "Acquistions",
        value: 50,
        children: [
          {
            name: "XOOM",
            value: 50,
            linkWith: ["Banks", "Cards", "Withdraw"],
          },
          {
            name: "HyperWallet",
            value: 50,
            linkWith: ["Banks", "Cards", "Withdraw"],
          },
          {
            name: "Consumer Products",
            value: 50,
            children: [
              {
                name: "Onboarding",
                value: 50,
              },
              {
                name: "P2P",
                value: 50,
              },
              {
                name: "Checkout",
                value: 50,
              },
              {
                name: "Credit",
                value: 50,
              },
            ],
          },
        ],
      },
    ],
  },
];
