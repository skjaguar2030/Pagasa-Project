import React, { useState, useEffect } from 'react';
import { Facebook, Twitter, Instagram, Linkedin, Download, Globe } from 'lucide-react';

const PortfolioHero = () => {
  const [activeNav, setActiveNav] = useState('Home');
  const [isLoaded, setIsLoaded] = useState(false);

  useEffect(() => {
    setIsLoaded(true);
  }, []);

  const navItems = ['Home', 'About', 'Skills', 'Portfolio', 'Contact'];

  return (
    <div className="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 relative overflow-hidden">
      {/* Animated background effects */}
      <div className="absolute inset-0">
        <div className="absolute top-20 left-20 w-72 h-72 bg-cyan-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div className="absolute bottom-20 right-20 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-cyan-400/5 rounded-full blur-3xl animate-pulse delay-500"></div>
      </div>

      {/* Navigation */}
      <nav className={`flex justify-between items-center px-6 md:px-16 lg:px-24 py-6 relative z-10 transition-all duration-1000 ${isLoaded ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-10'}`}>
        <div className="text-2xl md:text-3xl font-bold text-white">
          Portfolio<span className="text-cyan-400">.</span>
        </div>
        
        <ul className="hidden md:flex space-x-8">
          {navItems.map((item) => (
            <li key={item}>
              <button
                onClick={() => setActiveNav(item)}
                className={`text-lg font-medium transition-all duration-300 hover:text-cyan-400 relative group ${
                  activeNav === item ? 'text-cyan-400' : 'text-gray-300'
                }`}
              >
                {item}
                <span className={`absolute bottom-0 left-0 w-full h-0.5 bg-cyan-400 transform transition-transform duration-300 ${
                  activeNav === item ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100'
                }`}></span>
              </button>
            </li>
          ))}
        </ul>

        {/* Mobile menu button */}
        <button className="md:hidden text-white">
          <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </nav>

      {/* Main content */}
      <div className="flex flex-col lg:flex-row items-center justify-between px-6 md:px-16 lg:px-24 py-12 lg:py-20 relative z-10">
        {/* Left content */}
        <div className={`lg:w-1/2 space-y-6 lg:space-y-8 text-center lg:text-left transition-all duration-1000 delay-300 ${
          isLoaded ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-20'
        }`}>
          <div className="space-y-2">
            <p className="text-lg md:text-xl text-gray-300 font-light">Hello, It's Me</p>
            <h1 className="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
              John Kendric
            </h1>
            <div className="text-xl md:text-2xl lg:text-3xl">
              <span className="text-gray-300">And I'm a </span>
              <span className="text-cyan-400 font-semibold">Frontend Developer</span>
            </div>
          </div>

          <p className="text-gray-400 text-base md:text-lg leading-relaxed max-w-md mx-auto lg:mx-0">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Possimus nulla 
            sed saepe rerum, animi expedita.
          </p>

          {/* Social icons */}
          <div className="flex justify-center lg:justify-start space-x-4">
            {[Facebook, Twitter, Instagram, Linkedin].map((Icon, index) => (
              <button
                key={index}
                className="w-12 h-12 border-2 border-cyan-400 rounded-full flex items-center justify-center text-cyan-400 hover:bg-cyan-400 hover:text-slate-900 transition-all duration-300 hover:scale-110"
              >
                <Icon size={20} />
              </button>
            ))}
          </div>

          {/* Download CV button */}
          <div className="pt-4">
            <button className="bg-gradient-to-r from-cyan-400 to-cyan-500 text-slate-900 font-semibold py-3 px-8 rounded-full flex items-center space-x-2 hover:from-cyan-300 hover:to-cyan-400 transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-cyan-500/25 mx-auto lg:mx-0">
              <Download size={18} />
              <span>Download CV</span>
            </button>
          </div>
        </div>

        {/* Right content - Profile image with globe */}
        <div className={`lg:w-1/2 flex justify-center mt-12 lg:mt-0 transition-all duration-1000 delay-500 ${
          isLoaded ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-20'
        }`}>
          <div className="relative">
            {/* Glowing border animation */}
            <div className="absolute -inset-4 bg-gradient-to-r from-cyan-400 via-blue-500 to-cyan-400 rounded-3xl blur-md animate-pulse opacity-75"></div>
            <div className="absolute -inset-2 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-3xl animate-spin-slow opacity-60"></div>
            
            {/* Profile container */}
            <div className="relative bg-slate-800 rounded-3xl p-8 w-80 h-96 md:w-96 md:h-[28rem] flex items-center justify-center">
              {/* Rotating globe */}
              <div className="relative">
                <div className="w-32 h-32 md:w-40 md:h-40 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-full flex items-center justify-center shadow-2xl animate-spin-slow">
                  <Globe size={60} className="text-white animate-pulse" />
                </div>
                
                {/* Orbiting elements */}
                <div className="absolute inset-0 animate-spin-reverse">
                  <div className="absolute -top-4 left-1/2 transform -translate-x-1/2 w-3 h-3 bg-cyan-400 rounded-full"></div>
                  <div className="absolute -bottom-4 left-1/2 transform -translate-x-1/2 w-2 h-2 bg-blue-400 rounded-full"></div>
                  <div className="absolute top-1/2 -left-4 transform -translate-y-1/2 w-2 h-2 bg-cyan-300 rounded-full"></div>
                  <div className="absolute top-1/2 -right-4 transform -translate-y-1/2 w-3 h-3 bg-blue-300 rounded-full"></div>
                </div>
              </div>
              
              {/* Floating particles */}
              <div className="absolute top-16 left-8 w-1 h-1 bg-cyan-400 rounded-full animate-bounce delay-100"></div>
              <div className="absolute top-24 right-12 w-2 h-2 bg-blue-400 rounded-full animate-bounce delay-300"></div>
              <div className="absolute bottom-20 left-16 w-1 h-1 bg-cyan-300 rounded-full animate-bounce delay-500"></div>
              <div className="absolute bottom-32 right-8 w-2 h-2 bg-blue-300 rounded-full animate-bounce delay-700"></div>
            </div>
          </div>
        </div>
      </div>

      {/* Mobile navigation */}
      <div className="md:hidden fixed bottom-6 left-6 right-6 bg-slate-800/80 backdrop-blur-lg rounded-2xl p-4 z-20">
        <div className="flex justify-around">
          {navItems.map((item) => (
            <button
              key={item}
              onClick={() => setActiveNav(item)}
              className={`text-sm font-medium px-3 py-2 rounded-lg transition-all duration-300 ${
                activeNav === item 
                  ? 'text-cyan-400 bg-cyan-400/10' 
                  : 'text-gray-300 hover:text-cyan-400'
              }`}
            >
              {item}
            </button>
          ))}
        </div>
      </div>

      <style jsx>{`
        @keyframes spin-slow {
          from { transform: rotate(0deg); }
          to { transform: rotate(360deg); }
        }
        @keyframes spin-reverse {
          from { transform: rotate(360deg); }
          to { transform: rotate(0deg); }
        }
        .animate-spin-slow {
          animation: spin-slow 20s linear infinite;
        }
        .animate-spin-reverse {
          animation: spin-reverse 15s linear infinite;
        }
      `}</style>
    </div>
  );
};

export default PortfolioHero;