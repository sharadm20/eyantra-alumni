function getq1(){
    var ctx = document.getElementById("pieChart").getContext('2d');
      $.ajax({
        type  : 'get',
        url     :'/response_q1' ,
        data  : { 'que' :1,
              '_token'    : '{!! csrf_token() !!}'
            },
        dataType: 'json',
        success: function(data){
          var set={
        labels: ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"],
        datasets: [
            {
                label: "dataset",
                data: data,
                backgroundColor: [
                    "#003380",
                    "#0052cc",
                    "#3385ff",
                    "#80b3ff",
                    "#b3d1ff"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Improved technical skills",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };
      var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: set,
        options: options
    });
    },                   
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
       
        alert('Whoops! Something went wrong'+errorThrown);    
    }
  });
}     

function getq2(){
    var ctx = document.getElementById("pieChart2").getContext('2d');
      $.ajax({
        type  : 'get',
        url     :'/response_q1' ,
        data  : { 
                'que' :2,
              '_token'    : '{!! csrf_token() !!}'
            },
        dataType: 'json',
        success: function(data){
          var set={
        labels: ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"],
        datasets: [
            {
                label: "dataset",
                data: data,
                backgroundColor: [
                    "#003380",
                    "#0052cc",
                    "#3385ff",
                    "#80b3ff",
                    "#b3d1ff"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Changed my approach to problem solving",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };
      var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: set,
        options: options
    });
    },                   
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
       
        alert('Whoops! Something went wrong'+errorThrown);    
    }
  });
}    

function getq3(){
    var ctx = document.getElementById("pieChart3").getContext('2d');
      $.ajax({
        type  : 'get',
        url     :'/response_q1' ,
        data  : { 
                'que' :3,
              '_token'    : '{!! csrf_token() !!}'
            },
        dataType: 'json',
        success: function(data){
          var set={
        labels: ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"],
        datasets: [
            {
                label: "dataset",
                data: data,
                backgroundColor: [
                    "#003380",
                    "#0052cc",
                    "#3385ff",
                    "#80b3ff",
                    "#b3d1ff"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Help improve presentation skills",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };
      var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: set,
        options: options
    });
    },                   
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
       
        alert('Whoops! Something went wrong'+errorThrown);    
    }
  });
} 

function getq4(){
    var ctx = document.getElementById("pieChart4").getContext('2d');
      $.ajax({
        type  : 'get',
        url     :'/response_q1' ,
        data  : { 
                'que' :4,
              '_token'    : '{!! csrf_token() !!}'
            },
        dataType: 'json',
        success: function(data){
          var set={
        labels: ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"],
        datasets: [
            {
                label: "dataset",
                data: data,
                backgroundColor: [
                    "#003380",
                    "#0052cc",
                    "#3385ff",
                    "#80b3ff",
                    "#b3d1ff"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Improved technical skills",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };
      var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: set,
        options: options
    });
    },                   
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
       
        alert('Whoops! Something went wrong'+errorThrown);    
    }
  });
} 

function getq5(){
    var ctx = document.getElementById("pieChart5").getContext('2d');
      $.ajax({
        type  : 'get',
        url     :'/response_q1' ,
        data  : { 
                'que' :5,
              '_token'    : '{!! csrf_token() !!}'
            },
        dataType: 'json',
        success: function(data){
          var set={
        labels: ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"],
        datasets: [
            {
                label: "dataset",
                data: data,
                backgroundColor: [
                    "#003380",
                    "#0052cc",
                    "#3385ff",
                    "#80b3ff",
                    "#b3d1ff"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Improved my ability to work in a team",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };
      var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: set,
        options: options
    });
    },                   
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
       
        alert('Whoops! Something went wrong'+errorThrown);    
    }
  });
} 

function getq6(){
    var ctx = document.getElementById("pieChart6").getContext('2d');
      $.ajax({
        type  : 'get',
        url     :'/response_q1' ,
        data  : { 
                'que' :6,
              '_token'    : '{!! csrf_token() !!}'
            },
        dataType: 'json',
        success: function(data){
          var set={
        labels: ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"],
        datasets: [
            {
                label: "dataset",
                data: data,
                backgroundColor: [
                    "#003380",
                    "#0052cc",
                    "#3385ff",
                    "#80b3ff",
                    "#b3d1ff"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Encouraged innovative and creative thinking",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };
      var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: set,
        options: options
    });
    },                   
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
       
        alert('Whoops! Something went wrong'+errorThrown);    
    }
  });
} 

function getq7(){
    var ctx = document.getElementById("pieChart7").getContext('2d');
      $.ajax({
        type  : 'get',
        url     :'/response_q1' ,
        data  : { 
                'que' :7,
              '_token'    : '{!! csrf_token() !!}'
            },
        dataType: 'json',
        success: function(data){
          var set={
        labels: ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"],
        datasets: [
            {
                label: "dataset",
                data: data,
                backgroundColor: [
                    "#003380",
                    "#0052cc",
                    "#3385ff",
                    "#80b3ff",
                    "#b3d1ff"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Given an oppurtunity to work on new technology",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };
      var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: set,
        options: options
    });
    },                   
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
       
        alert('Whoops! Something went wrong'+errorThrown);    
    }
  });
} 

function getq8(){
    var ctx = document.getElementById("pieChart8").getContext('2d');
      $.ajax({
        type  : 'get',
        url     :'/response_q1' ,
        data  : { 
                'que' :8,
              '_token'    : '{!! csrf_token() !!}'
            },
        dataType: 'json',
        success: function(data){
          var set={
        labels: ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"],
        datasets: [
            {
                label: "dataset",
                data: data,
                backgroundColor: [
                    "#003380",
                    "#0052cc",
                    "#3385ff",
                    "#80b3ff",
                    "#b3d1ff"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Tasks and problem statement given were challenging",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };
      var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: set,
        options: options
    });
    },                   
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
       
        alert('Whoops! Something went wrong'+errorThrown);    
    }
  });
} 

function getq9(){
    var ctx = document.getElementById("pieChart9").getContext('2d');
      $.ajax({
        type  : 'get',
        url     :'/response_q1' ,
        data  : { 
                'que' :9,
              '_token'    : '{!! csrf_token() !!}'
            },
        dataType: 'json',
        success: function(data){
          var set={
        labels: ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"],
        datasets: [
            {
                label: "dataset",
                data: data,
                backgroundColor: [
                    "#003380",
                    "#0052cc",
                    "#3385ff",
                    "#80b3ff",
                    "#b3d1ff"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Inculcated a habit of thinking outside the box",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };
      var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: set,
        options: options
    });
    },                   
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
       
        alert('Whoops! Something went wrong'+errorThrown);    
    }
  });
} 

function getq10(){
    var ctx = document.getElementById("pieChart10").getContext('2d');
      $.ajax({
        type  : 'get',
        url     :'/response_q1' ,
        data  : { 
                'que' :10,
              '_token'    : '{!! csrf_token() !!}'
            },
        dataType: 'json',
        success: function(data){
          var set={
        labels: ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"],
        datasets: [
            {
                label: "dataset",
                data: data,
                backgroundColor: [
                    "#003380",
                    "#0052cc",
                    "#3385ff",
                    "#80b3ff",
                    "#b3d1ff"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Improved self confidence and self-esteem",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };
      var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: set,
        options: options
    });
    },                   
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
       
        alert('Whoops! Something went wrong'+errorThrown);    
    }
  });
} 

function getq11(){
    var ctx = document.getElementById("pieChart11").getContext('2d');
      $.ajax({
        type  : 'get',
        url     :'/response_q1' ,
        data  : { 
                'que' :11,
              '_token'    : '{!! csrf_token() !!}'
            },
        dataType: 'json',
        success: function(data){
          var set={
        labels: ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"],
        datasets: [
            {
                label: "dataset",
                data: data,
                backgroundColor: [
                    "#003380",
                    "#0052cc",
                    "#3385ff",
                    "#80b3ff",
                    "#b3d1ff"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "The engagement with e-Yantra team was encouraging and helpful",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };
      var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: set,
        options: options
    });
    },                   
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
       
        alert('Whoops! Something went wrong'+errorThrown);    
    }
  });
} 


function getq12(){
    var ctx = document.getElementById("pieChart12").getContext('2d');
      $.ajax({
        type  : 'get',
        url     :'/response_q1' ,
        data  : { 
                'que' :12,
              '_token'    : '{!! csrf_token() !!}'
            },
        dataType: 'json',
        success: function(data){
          var set={
        labels: ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"],
        datasets: [
            {
                label: "dataset",
                data: data,
                backgroundColor: [
                    "#003380",
                    "#0052cc",
                    "#3385ff",
                    "#80b3ff",
                    "#b3d1ff"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Given me a positive attitude towards solving problems",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };
      var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: set,
        options: options
    });
    },                   
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
       
        alert('Whoops! Something went wrong'+errorThrown);    
    }
  });
} 

function getq13(){
    var ctx = document.getElementById("pieChart13").getContext('2d');
      $.ajax({
        type  : 'get',
        url     :'/response_q1' ,
        data  : { 
                'que' :13,
              '_token'    : '{!! csrf_token() !!}'
            },
        dataType: 'json',
        success: function(data){
          var set={
        labels: ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"],
        datasets: [
            {
                label: "dataset",
                data: data,
                backgroundColor: [
                    "#003380",
                    "#0052cc",
                    "#3385ff",
                    "#80b3ff",
                    "#b3d1ff"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Helped in assigning priorities",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };
      var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: set,
        options: options
    });
    },                   
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
       
        alert('Whoops! Something went wrong'+errorThrown);    
    }
  });
} 

